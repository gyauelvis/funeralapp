<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Payment;
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
        return view('donations.view-donations', ['donations' => Payment::where('payment_type', 'DONATION')->orderBy('created_at', 'desc')->paginate(20)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('donations.create-donation', ['all_contributors' => Contributor::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'contributor_id' => 'required|exists:App\Models\Contributor.id',
            'amount' => 'required|numeric',
            'phone_number' => 'required|numeric',
            'purpose' => 'nullable|min:6'
        ], [
            'contributor_id' => 'Enter a valid member name or ID number. Minimum of 5 letters',
            'amount' => 'Enter a valid amount',
            'phone_number' => 'Enter a valid phone number',
            'purpose' => 'Your purpose has to be more than 6 characters long',
        ]);

        dd($data['contributor_id']);

        $contributor = Contributor::find($data['contributor_id']);
        if ($contributor->phone_number === $data['phone_number'] and $contributor->id === $data['contributor_id']) {

            $data['payment_type'] = 'DONATION';

            $data['month'] = Carbon::now()->month;
            $data['year'] = Carbon::now()->year;
            $data['user_id'] = Auth::user()->id;

            Payment::create($data);

            toastr()->success("Donation has been recorded successfully");

            //print receipt
            return redirect(route('contributions'));
        }



        toastr()->error('A member exists with the same phone number');
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
    public function destroy(Contributor $contributor)
    {
        //
    }
}
