<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'error' => false,
            'message' => 'Skill data',
            'data' => Skill::all(),
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort(404, 'Not Found');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'persentase' => 'required|integer',
        ]);

        if ($skill = Skill::create($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'Skill created',
                'data' => $skill,
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Skill failed to create',
        ], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        abort(404, 'Not Found');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        abort(404, 'Not Found');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'persentase' => 'required|integer',
        ]);

        if ($skill->update($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'Skill updated',
                'data' => $skill,
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Skill failed to update',
        ], 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        if ($skill->delete()) {
            return response()->json([
                'error' => false,
                'message' => 'Skill deleted',
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Skill failed to delete',
        ], 400);
    }
}