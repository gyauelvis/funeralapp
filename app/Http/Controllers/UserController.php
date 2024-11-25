<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('users.view-users', ['users' =>  User::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.register-user', ['roles' =>  Role::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

        $total_contribution = $user->payments_received()->where('payment_type', 'CONTRIBUTION')->sum('amount');
        $total_donation = $user->payments_received()->where('payment_type', 'DONATION')->sum('amount');

        return view('users.single-user', [
            'user' => $user,
            'total_contribution' => Number::currency($total_contribution, 'GHS'),
            'total_donation' => Number::currency($total_donation, 'GHS')
        ]);

        // return view('users.single-user', [
        //     'user' => $user,
        //     'roles' =>  Role::get()
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd('Here');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
