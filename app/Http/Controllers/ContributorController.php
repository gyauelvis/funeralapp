<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use Illuminate\Http\Request;

class ContributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contributor::all();
        dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd('Contributor Create Page');
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
    public function show(Contributor $contributor)
    {
        dd($contributor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contributor $contributor)
    {
        dd($contributor);
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
        dd($contributor);
    }
}
