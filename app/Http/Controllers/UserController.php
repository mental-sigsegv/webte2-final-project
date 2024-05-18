<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function resetPassword(Request $request) {
        $validated = $request->validate([
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if (auth()->user()->isAdmin()) {
            $id = $request->input('id', auth()->id());
        } else {
            $id = auth()->id();
        }


        User::where('id', $id)->update(array('password' => Hash::make($request->input('new_password'))));

        return redirect()->intended();
    }
    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:64',
            'login' => 'required|string|max:16|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'login' => $request->login,
            'password' => $request->password,
        ]);

        return redirect('/login');
    }

    public function logoutUser(Request $request) {
        auth()->logout();

        return redirect()->intended();
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('login', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->withErrors(['login' => 'Invalid login or password']); // Redirect back with error message
    }

}
