<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'error' => false,
            'message' => 'Success',
            'data' => Experience::all(),
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'position' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        if ($experience = Experience::create($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'Success',
                'data' => $experience,
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Failed',
        ], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        return response()->json([
            'error' => false,
            'message' => 'Success',
            'data' => $experience,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $validate = $request->validate([
            'title' => 'required',
            'position' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        if ($experience->update($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'Success',
                'data' => $experience,
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Failed',
        ], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        if ($experience->delete()) {
            return response()->json([
                'error' => false,
                'message' => 'Success',
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Failed',
        ], 500);
    }
}