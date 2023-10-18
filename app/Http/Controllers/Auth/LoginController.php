<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return Inertia::render('Auth/Login');
    }
    public function backOfficeShowLoginForm()
    {
        return Inertia::render('Auth/BackOfficeLogin');
    }

    
    public function login(Request $request)
    {
        $getUser = User::select('logincode')
        ->where('logincode', $request->logincode)
        ->where('isactive', 1)
        ->first();

        $getUser = $getUser->logincode ?? NULL;
        
        $credentials = $request->validate([
            'logincode' => ['required', 'integer'],
        ]);

        if ($getUser == NULL) {
            return back()->withErrors([
                'logincode' => 'The provided credentials do not match our records.',
            ]);
        }
        else {
            $user = User::where('logincode', $request->logincode)->first();
            if ($user) {
                Auth::login($user);
                if (Auth::check()) {
                    $request->session()->regenerate();
    
                    return Inertia::location(route('dashboard'), [
                        'user' => Auth::user()
                    ]);
    
                }
            } else {
                // No user with matching logincode found
                return back()->withInput()->withErrors(['logincode' => 'Login failed.']);
            }

        }
    }

    public function backofficelogin(Request $request)
    {
        $getUser = User::select('email')
        ->where('email', $request->email)
        ->where('isactive', 1)
        ->first();

        $getUser = $getUser->email ?? NULL;
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($getUser == NULL) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else {
            if (Auth::guard('web')->attempt($credentials)) {
                $request->session()->regenerate();

                return Inertia::location(route('backoffice.dashboard'), [
                    'user' => Auth::user()
                ]);
                

            }
            else {
                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                ]);
            }

        }
    }
}
