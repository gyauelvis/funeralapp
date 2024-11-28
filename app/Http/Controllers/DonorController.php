<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use Illuminate\Http\Request;
use Illuminate\Support\Number;
use Illuminate\Support\Facades\File;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('donor.view-donors', ['donors' => Contributor::where('is_member', '=', 0)->orderBy('created_at', 'desc')->paginate(20)->withQueryString()]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Contributor $contributor)
    {

        if ($contributor->is_member !== 1) {
            return redirect(route('member.single', $contributor->id));
        }

        $donations = $contributor->payments()->where('payment_type', 'DONATION')->get();
        $contribution = $contributor->payments()->where('payment_type', 'CONTRIBUTION')->sum('amount');

        return view('donor.single-donor', [
            'donor' => $contributor,
            'donations' => $donations,
            'contribution' => Number::currency($contribution, 'GHS')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contributor $contributor)
    {
        if ($contributor->is_member !== 0) {
            return redirect(route('member.edit', $contributor->id));
        }

        return view('donor.edit-donor', ['donor' => $contributor]);
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
        ], [
            'picture_path' => 'The image must be jpeg,jpg or png',
            'name' => 'Enter a valid member name. Minimum of 5 letters',
            'suburb' => 'Enter a valid suburb for this member ',
            'phone_number' => 'Enter a valid phone number',
        ]);


        if (Contributor::where('phone_number', "=", $data['phone_number']) === $data['phone_number']) {
            toastr()->error('A donor exists with the same phone number');
            return back();
        };


        if ($request->picture_path !== null) {

            $image_name = time() . '.' . $data['picture_path']->extension();

            $data['picture_path']->move(public_path('members_images'), $image_name);

            $data['picture_path'] = $image_name;

            $old_picture_path = Contributor::find($contributor->id)->only('picture_path');

            File::delete(public_path('/members_images/' . $old_picture_path['picture_path']));
        }

        if ($contributor->update($data)) {
            toastr()->success("{$contributor->name}'s details has been updated successfully");
            return redirect(route('donor.single', $contributor->id));
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

        return redirect(route('donors'));
    }
}
