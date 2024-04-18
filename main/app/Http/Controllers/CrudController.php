<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * display data
     */
    public function index()
    {

        return response()->json("hello");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * ADD user
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "password" => 'required',
            
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            
        ]);
        return response()->json([
            'message' => 'Add user successfully'
        ]);  
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json([
            'message' => $user,
            "ana" => "samaka"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update User.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required',
            "password" => 'required',
            
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            
        ]);
        return response()->json([
            "message" => "updating user successfully",
            "user" => $user,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->tokens()->delete();
        $user->delete();
        return response()->json("deleting seccess");
    }


    // public function get($id){

    //     $user = User::findOrFail($id);
    //     if ($user) {
    //         // $permission = [];
    //         $data = $user->roles()->permissions()->get();
    //         dd($data);
    //             $role_id = $data->id;
    //             $role = role::findOrFail($role_id);
    //             if ($role) {
    //                 $all_permission = $role->permissions()->get();
    //                 return response()->json([ 'data' => $all_permission]);
    //             }
            
            
    //     }
    // }



}





