<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)){
            $user = User::find(auth()->user()->id);

            return response()->json([
                'error' => false,
                'message' => 'Login success',
                'user' => $user,
                'token' => $user->createToken('token')->plainTextToken
            ], 200);
        }

        return response()->json([
            'error' => true,
            'message' => 'Login failed'
        ], 400);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'error' => false,
            'message' => 'Logout success'
        ], 200);
    }
}