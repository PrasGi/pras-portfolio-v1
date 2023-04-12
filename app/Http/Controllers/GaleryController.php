<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'error' => false,
            'message' => 'List of all galeries',
            'data' => Galery::all(),
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
            'title' => 'required',
            'link' => 'required',
        ]);

        if ($galery = Galery::create($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'Galery created successfully',
                'data' => $galery,
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Galery not created',
            'data' => null,
        ], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Galery $galery)
    {
        return response()->json([
            'error' => false,
            'message' => 'Galery found',
            'data' => $galery,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galery $galery)
    {
        abort(404, 'Page not found');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galery $galery)
    {
        $validate = $request->validate([
            'title' => 'required',
            'link' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('images-galerie');
        }

        if ($galery->update($validate)) {
            return response()->json([
                'error' => false,
                'message' => 'Galery updated successfully',
                'data' => $galery,
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Galery not updated',
            'data' => null,
        ], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galery $galery)
    {
        if ($galery->delete()) {
            return response()->json([
                'error' => false,
                'message' => 'Galery deleted successfully',
                'data' => $galery,
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Galery not deleted',
            'data' => null,
        ], 500);
    }
}
