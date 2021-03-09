<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function index(string $type = null)
    {
        if (Auth::check()) {
            return redirect()->route('cabinet.index');
        }

        if ($type && $type != 'ur') {
            return abort(404);
        }

        return view('login')->with(['type' => $type]);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('cabinet.index');
        }
        return back()->with('login_error', __('messages.login_error'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }
}
