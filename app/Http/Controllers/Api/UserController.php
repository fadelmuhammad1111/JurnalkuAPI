<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function refreshToken(Request $request)
    {
        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['token' => $token]);
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'nis' => 'required|integer',
            'password' => 'required',
        ]);        

        // Cek kredensial
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Buat token baru
            $token = $user->createToken('auth_token')->plainTextToken;
            
            return response()->json([
                'message' => 'Login success',
                'token' => $token,
                'data' => $user
            ], 200);
        }

        // Jika gagal
        return response()->json([
            'message' => 'Email or Password incorrect'
        ], 401);
    }
}
