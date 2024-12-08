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
        return view('dashboard', [
            'payments' => Payment::orderBy('created_at', 'desc')->get(),
            'members' => Contributor::where('is_member', '=', 1)->orderBy('created_at', 'desc')->get(),
            'users' => User::get()
        ]);
    }
}
