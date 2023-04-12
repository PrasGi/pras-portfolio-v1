<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort(404, 'Not Found');
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
        abort(404, 'Not Found');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json([
            'error' => false,
            'message' => 'User data',
            'data' => $user,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        abort(404, 'Not Found');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('images-user');
        }

        if ($user->update($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'User data updated',
                'data' => $user,
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'User data failed to update',
            'data' => null,
        ], 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        abort(404, 'Not Found');
    }
}
