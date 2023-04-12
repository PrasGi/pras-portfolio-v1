<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'error' => false,
            'message' => 'List of all projects',
            'data' => Project::all(),
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(404, 'Page not found');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'image' => 'required|file|image',
            'name_project' => 'required',
            'name_company' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $validate['image'] = $request->file('image')->store('images-project');

        if ($project = Project::create($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'Project created successfully',
                'data' => $project,
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Project not created',
            'data' => null,
        ], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return response()->json([
            'error' => false,
            'message' => 'Project details',
            'data' => $project,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        abort(404, 'Page not found');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validate = $request->validate([
            'name_project' => 'required',
            'name_company' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('images-project');
        }

        if (Project::create($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'Project updated successfully',
                'data' => $project,
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Project not updated',
        ], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::delete($project->image);
        }

        if ($project->delete()) {
            return response()->json([
                'error' => false,
                'message' => 'Project deleted successfully',
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Project not deleted',
        ], 500);
    }
}