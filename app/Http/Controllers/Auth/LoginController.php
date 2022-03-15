<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     * @param Request $request
     * @return view
     */
    public function login(Request $request)
    {
        // if (Auth::check()) {
        //     return redirect()->route('dashboard');
        // }
        
        return view('backend.auth.login');
    }
    
    /**
     * Handle an authentication attempt.
     * @param Request $request
     * @return redirect
     */
    public function postLogin(Request $request)
    {
        $login = $request->only('email', 'password');
        if(Auth::attempt($login))
        {
            return redirect()->route('home.index');
        }
        else{
            echo "Đăng nhập thất bại";
        }
        
       
    }
    
    /**
     * Logout
     * @return redirect
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
