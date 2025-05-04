<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisteredUser;

class RegisteredUserController extends Controller
{
    public function index()
    {
        return RegisteredUser::all();
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required|string|max:100',
            'email' => 'required|email|max:255|unique:registered_users,email',
            'message' => 'required|string',
        ]);

        $user = RegisteredUser::create([
            'full_name' => $validated['fullName'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return response()->json(['message' => 'Registered successfully', 'Data' => $user]);
    }
}
