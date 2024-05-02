<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        $user = User::factory()->create();
        return response()->json(['message' => 'User created successfully', 'user' => $user]);
    }
}
