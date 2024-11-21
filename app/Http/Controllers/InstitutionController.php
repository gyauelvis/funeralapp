<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Flasher\Toastr\Prime\ToastrInterface;


class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (Institution::get()->count() !== 0) {
            toastr()->error('Institution already created');
            return redirect(route('dashboard'));
        };
        return view('institution.register-institution');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (Institution::get()->count() !== 0) {

            return redirect(route('dashboard'));
        };


        $data = $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|min:5',
            'email' => 'required|email',
            'slogan' => 'nullable',
            'phone_number' => 'required|numeric',
            'address' => 'required'
        ], [
            'logo' => 'Logo must be jpeg,jpg or png',
            'name' => 'Enter a valid name for institution. Min of 5 letters',
            'email' => 'Enter a valid institution email',
            'slogan' => 'Enter the slogan for your institution',
            'phone_number' => 'Enter a valid phone number',
            'address' => 'Enter a valid address for the institution'
        ]);



        $image_name = time() . '.' . $data['logo']->extension();

        $data['logo']->move(public_path('logos'), $image_name);

        $data['logo'] = $image_name;

        if (Institution::get()->count() === 0) {
            Institution::create($data);

            toastr()->success('Institution has been created successfully');
            return redirect(route('dashboard'));
        };

        toastr()->error('You cannot have more than one institution');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Institution $institution)
    {
        return view('institution.show-institution', ['institution' => $institution]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Institution $institution)
    {
        return view('institution.edit-institution', ['institution' => $institution]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Institution $institution)
    {
        $data = $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|min:5',
            'email' => 'required|email',
            'slogan' => 'nullable',
            'phone_number' => 'required|numeric',
            'address' => 'required'
        ], [
            'logo' => 'Logo must be jpeg,jpg or png',
            'name' => 'Enter a valid name for institution. Min of 5 letters',
            'email' => 'Enter a valid institution email',
            'slogan' => 'Enter the slogan for your institution',
            'phone_number' => 'Enter a valid phone number',
            'address' => 'Enter a valid address for the institution'
        ]);

        $image_name = time() . '.' . $data['logo']->extension();

        $data['logo']->move(public_path('logos'), $image_name);

        if (File::exists(public_path('logos' . $institution->logo))) {
            File::delete(public_path('logos' . $institution->logo));
        }

        $data['logo'] = $image_name;

        if ($institution->update($data)) {
            toastr()->success('Institution details has been updated successfully');
            return redirect(route('dashboard'));
        };
        toastr()->success('There was an error updating');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Institution $institution)
    {
        //
    }
}
