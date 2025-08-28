<?php

namespace App\Http\Controllers\Manage\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        if(auth()->guard('admins')->attempt($request->only('email', 'password') , $request->filled('remember'))) {
            session()->flash('success', __('dashboard.login_success' , ['name' => auth()->guard('admins')->user()->name]));
            return redirect()->intended(route('manage.home'));
        } else {
            return back()->withErrors([
                'email' => __('auth.failed'),
            ])->onlyInput('email');
        }
    }
}
