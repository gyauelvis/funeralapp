<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('members.view-members', ['members' => Contributor::where('is_member', '=', 1)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.register-member',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'picture_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|min:5',
            'suburb' => 'required',
            'phone_number' => 'required|numeric',
            'denomination' => 'nullable|min:5'
        ], [
            'picture_path' => 'The image must be jpeg,jpg or png',
            'name' => 'Enter a valid member name. Minimum of 5 letters',
            'suburb' => 'Enter a valid suburb for this member ',
            'phone_number' => 'Enter a valid phone number',
            'denomination' => 'Enter a valid denomination. Must be at least 5 characters'
        ]);


        if (Contributor::where('phone_number', "=", $data['phone_number']) === $data['phone_number']) {
            toastr()->error('A member exists with the same phone number');
            return back();
        };

        $image_name = time() . '.' . $data['picture_path']->extension();

        $data['picture_path']->move(public_path('members_images'), $image_name);

        $data['picture_path'] = $image_name;
        $data['membership_id'] = "AS/24/" . time();
        $data['is_member'] = 1;
        $data['user_id'] = Auth::user()->id;

        $member = Contributor::create($data);

        toastr()->success("{$member->name} has been registered successfully");
        return redirect(route('members'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Contributor $contributor, Request $request)
    {
        $member = Contributor::find($request->id);

        return view('members.view-members', ['member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contributor $contributor)
    {
        return view('members.edit-member', ['member' => $contributor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contributor $contributor)
    {
        $data = $request->validate([
            'picture_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|min:5',
            'suburb' => 'required',
            'phone_number' => 'required|numeric',
            'denomination' => 'nullable|min:5'
        ], [
            'picture_path' => 'The image must be jpeg,jpg or png',
            'name' => 'Enter a valid member name. Minimum of 5 letters',
            'suburb' => 'Enter a valid suburb for this member ',
            'phone_number' => 'Enter a valid phone number',
            'denomination' => 'Enter a valid denomination. Must be at least 5 characters'
        ]);


        if (Contributor::where('phone_number', "=", $data['phone_number']) === $data['phone_number']) {
            toastr()->error('A member exists with the same phone number');
            return back();
        };


        if ($request->picture_path !== null) {

            $image_name = time() . '.' . $data['picture_path']->extension();

            $data['picture_path']->move(public_path('members_images'), $image_name);

            $data['picture_path'] = $image_name;

            $old_picture_path = Contributor::find(52)->only('picture_path');

            File::delete(public_path('/members_images/' . $old_picture_path['picture_path']));
        }

        if ($contributor->update($data)) {
            toastr()->success("{$contributor->name}'s details has been updated successfully");
            return redirect(route('members'));
        }

        toastr()->error("Error updating {$contributor->name} details");
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contributor $contributor)
    {
        $contributor->delete();
        toastr()->success("{$contributor->name}'s details has been deleted successfully");

        return back();
    }
}
