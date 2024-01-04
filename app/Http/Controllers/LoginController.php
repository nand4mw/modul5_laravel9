<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'email_operator' => 'required|email',
            'password_operator' => 'required',
        ]);

        $credentials = $request->only('email_operator', 'password_operator');

        if (Auth::guard('operator_sistem')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // Sesuaikan dengan halaman setelah login berhasil
        }

        return redirect()->back()->withErrors(['msg' => 'Invalid email or password.']);
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }


    

}
