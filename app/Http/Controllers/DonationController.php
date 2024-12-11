<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Payment;
use App\Models\Project;
use App\Models\Contributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('donations.view-donations', ['donations' => Payment::where('payment_type', 'DONATION')->orderBy('created_at', 'desc')->paginate(15)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('donations.create-donation', [
            'members' => Contributor::where('is_member', 1)->get(),
            'projects' => Project::orderBy('created_at', 'desc')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->membership_status == 'is_member') {
            $data = $request->validate([
                'membership_status' => 'required|in:is_member,is_not_member',
                'contributor_id' => 'required|exists:App\Models\Contributor,id',
                'member_amount' => 'required|numeric',
                'project_id' => 'required|exists:App\Models\Project,id'
            ], [
                'contributor_id' => 'Enter a valid member name or ID number. Minimum of 5 letters',
                'member_amount' => 'Enter a valid amount',
                'project_id.required' => 'You need to select a project',
                'project_id.exist' => 'Invalid project selected'
            ]);

            $data['payment_type'] = 'DONATION';
            $data['amount'] = $data['member_amount'];
            $data['month'] = Carbon::now()->month;
            $data['year'] = Carbon::now()->year;
            $data['user_id'] = Auth::user()->id;

            Payment::create($data);

            toastr()->success("Donation has been recorded successfully");

            //print receipt

            return redirect(route('donor.single', $data['contributor_id']));
        }

        if ($request->membership_status == 'is_not_member') {
            $data = $request->validate([
                'membership_status' => 'required|in:is_member,is_not_member',
                'name' => 'required|min:5',
                'amount' => 'required|numeric',
                'phone_number' => 'required|numeric',
                'project_id' => 'required|exists:App\Models\Project,id'
            ], [
                'name' => 'Name should be at least 5 characters long',
                'amount' => 'Enter a valid amount',
                'phone_number' => 'Enter a valid phone number',
                'project_id.required' => 'You need to select a project',
                'project_id.exist' => 'Invalid project selected'
            ]);

            $contributor = Contributor::create([
                'name' => $data['name'],
                'phone_number' => $data['phone_number'],
                'is_member' => 0,
                'user_id' => Auth::user()->id,
            ]);



            $data['payment_type'] = 'DONATION';

            $data['month'] = Carbon::now()->month;
            $data['year'] = Carbon::now()->year;
            $data['user_id'] = Auth::user()->id;

            Payment::create([
                'amount' => $data['amount'],
                'payment_type' => 'DONATION',
                'month' => Carbon::now()->month,
                'year' => Carbon::now()->year,
                'user_id' => Auth::user()->id,
                'contributor_id' => $contributor->id,
                'project_id' => $data['project_id']
            ]);

            toastr()->success("Donation has been recorded successfully");

            //print receipt

            return redirect(route('donor.single', $contributor->id));
        }



        toastr()->error('A exists with the same phone number');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Contributor $contributor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contributor $contributor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contributor $contributor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        toastr()->success("Donation has been deleted successfully");

        return back();
    }
}
