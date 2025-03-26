<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('clients.login');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('home.index');
        }

        return back();
    }

    public function showRegisterForm()
    {
        return view('clients.register');
    }

    public function register(Request $request)
    {

        Hash::make(request('password'));

        try {

            $user = User::create($request->all());

            Auth::login($user);

            return redirect()->route('home.index');
        }catch (\Exception $e){
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('home.index');
    }
}
