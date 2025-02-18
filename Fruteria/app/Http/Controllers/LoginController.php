<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    
   
    public function register(Request $request)
    {
        $user = new Usuario();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        Auth::login($user);
        return redirect(route('login'));

    }

    
    public function login(Request $request)
    {
        $credenciales = $request->only('name', 'password');
        if (Auth::attempt($credenciales)){
            return redirect()->intended(route('inicio'));
        } else{
            route(view('auth.login', compact('error')));
        }

    }

    
    public function logout(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect(route('login'));
}
}
