<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OauthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'its working',
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
    public function register(Request $request)
    {
        // dd('ok');
        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "password" => 'required',
            
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return response()->json([
            'message' => 'successfully'
        ]);
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('usertoken' . $user->email)->plainTextToken;
            return response()->json([
                'message' => 'login successfully',
                'token' => $token,
            ]);
        } else {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }
    }


    public function logout(Request $request){

        // Auth()->user()->tokens()->delete();
        // return response()->json([
        //     'message' => 'logout successfully',
        // ]);


            
        $user = $request->user();

        if ($user) {
            $user->tokens()->delete();
            return response()->json([
                'message' => 'Logged out successfully',
            ]);
        }
    
        return response()->json([
            'message' => 'Unauthenticated',
        ], 401);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
