<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'error' => false,
            'message' => 'Success',
            'data' => Education::all(),
        ]);
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

        if ($education = Education::create($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'Success',
                'data' => $education,
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
    public function show(Education $education)
    {
        return response()->json([
            'error' => false,
            'message' => 'Success',
            'data' => $education,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $validate = $request->validate([
            'title' => 'required',
            'position' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        if ($education->update($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'Success',
                'data' => $education,
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
    public function destroy(Education $education)
    {
        if ($education->delete()) {
            return response()->json([
                'error' => false,
                'message' => 'Success',
                'data' => Education::all(),
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Failed',
        ], 500);
    }
}
