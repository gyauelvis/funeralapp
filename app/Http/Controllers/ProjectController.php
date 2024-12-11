<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projects.view-projects', ['projects' => Project::orderBy('created_at', 'desc')->paginate(15)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('projects.create-project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'name' => 'required|unique:users',
            'description' => 'nullable|min:6'
        ], [
            'name.required' => 'Project name is required. Minimum of 5 letters',
            'description.min' => 'Your description need to be 15 characters or more',

        ]);

        Project::create($data);

        toastr()->success("Project has been created successfully");

        return redirect(route('projects'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.single-project', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit-project', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([

            'name' => 'required|unique:users',
            'description' => 'nullable|min:6'
        ], [
            'name.required' => 'Project name is required. Minimum of 5 letters',
            'description.min' => 'Your description need to be 15 characters or more',

        ]);

        $project->update($data);

        toastr()->success("Project has been updated successfully");

        return redirect(route('projects'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        toastr()->success("Project has been deleted successfully");

        return back();
    }
}
