<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLoginpage(){
        return view('user/login');
    }

    public function showRegisterpage(){
        return view('user/register');
    }

    public function showAccountpage(){
        return view('user/account');
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($fields)){
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Die Angaben sind ungültig'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|min:3',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);

        // Has password
        $fields['password'] = bcrypt($fields['password']);

        // Create user
        $user = User::create($fields);

        // Login
        auth()->login($user);

        return redirect('/account');
    }
}
