<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Number;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('users.view-users', ['users' =>  User::orderBy('created_at', 'desc')->paginate(20)->withQueryString()]);
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
        $data = $request->validate([
            'picture_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|min:5',
            'email' => 'required|unique:App\Models\User,email',
            'phone_number' => 'nullable|min:10|numeric|unique:contributors,phone_number',
            // 'role' => 'required|min:5',
        ], [
            'picture_path' => 'The image must be jpeg,jpg or png',
            'name' => 'Enter a valid user name. Minimum of 5 letters',
            'email' => 'Enter a valid active email for this user ',
            'email.unique' => 'The email you entered has already been used for a user',
            'phone_number' => 'Phone number is either invalid or is registered with another user',
            'role' => 'You must select a role for the user'
        ]);


        if (isset($data['picture_path'])) {
            $image_name = time() . '.' . $data['picture_path']->extension();

            $data['picture_path']->move(public_path('users_pictures'), $image_name);

            $data['picture_path'] = $image_name;
        }


        $data['password'] = Hash::make('password');
        $data['user_id'] = Auth::user()->id;

        $user = User::create($data);

        toastr()->success("{$user->name} has been registered successfully");
        return to_route('user.single', $user->id);
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
