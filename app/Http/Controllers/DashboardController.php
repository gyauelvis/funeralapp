<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Payment;
use App\Models\Contributor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        dd(auth()->user());

        return view('dashboard', [
            'contributions' => Payment::where('payment_type', 'CONTRIBUTION')->get(),
            'donations' => Payment::where('payment_type', 'DONATION')->orderBy('created_at', 'desc')->get(),
            'members' => Contributor::where('is_member', '=', 1)->orderBy('created_at', 'desc')->get(),
            'users' => User::get()


        ]);
    }
}
