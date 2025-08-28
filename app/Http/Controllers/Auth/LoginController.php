<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function store(LoginRequest $request)
    {
        if(auth()->attempt($request->only('email', 'password') , true)) {
            return redirect()->intended(route('admin.home'));
        }

        return back()->withErrors([
            'email' => 'Invalid credentials provided.',
        ]);
    }

    public function show()
    {
        return view('auth.login');
    }
}
