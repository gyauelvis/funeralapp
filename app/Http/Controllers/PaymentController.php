<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Payment;
use App\Models\Contributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contributions.view-contributions', ['contributions' => Payment::where('payment_type', 'CONTRIBUTION')->with(['contributor', 'payment_made_to'])->orderBy('created_at', 'desc')->paginate(20)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contributions.create-contribution', ['members' => Contributor::where('is_member', 1)->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'contributor_id' => 'required|exists:App\Models\Contributor,id',
            'amount' => 'required|numeric',
        ], [
            'contributor_id' => 'Enter a valid member name or ID number. Minimum of 5 letters',
            'amount' => 'Enter a valid amount',
        ]);


        $data['payment_type'] = 'CONTRIBUTION';

        $data['month'] = Carbon::now()->month;
        $data['year'] = Carbon::now()->year;
        $data['user_id'] = Auth::user()->id;

        Payment::create($data);

        toastr()->success("Contribution has been made successfully");


        return redirect(route('member.single', $data['contributor_id']));
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        dd('Single Contribution');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        return view(
            'contributions.edit-contribution',
            [
                'contribution' => $payment,
                'members' => Contributor::where('is_member', 1)->get()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        $data = $request->validate([
            'contributor_id' => 'required|exists:App\Models\Contributor,id',
            'amount' => 'required|numeric',
        ], [
            'contributor_id' => 'Enter a valid member name or ID number. Minimum of 5 letters',
            'amount' => 'Enter a valid amount',
        ]);


        if ($payment->update($data)) {
            toastr()->success("Contribution has been updated successfully");
            return redirect(route('member.single', $data['contributor_id']));
        }

        toastr()->error("Error updating contribution details");
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        toastr()->success("Contribution has been deleted successfully");

        return back();
    }
}
