<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('cabinet.index');
    }

    public function info()
    {
        $user = Auth::user();
        return view('cabinet.info')->with(['user' => $user]);
    }
}
