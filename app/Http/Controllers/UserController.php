<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request) {
        $validated = $request->validate([
            #validate request
            'name' => 'required|string|min:3', #name must be string and minimum of 3 characters
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            #create user
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), #hash password
        ]);
        
        #return response
        return response()->json($user, 201);
    }
}
