<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Validation\Rules;

use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function store(Request $request){
        //return $request;

        $request->validate([
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        //dd($validated);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return to_route('login')->with('status', 'Account created!');
        
    }
}
