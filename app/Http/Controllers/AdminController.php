<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmin::class);
    }

    public function index()
    {
        $users = User::fiz()->get();
        return view('admin.index')->with(['users' => $users]);
    }

    public function indexUr()
    {
        $users_ur = User::ur()->get();
        $users_ip = User::ip()->get();

        return view('admin.index-ur')->with([
            'users_ur' => $users_ur,
            'users_ip' => $users_ip
        ]);
    }

    public function show(User $user)
    {
        return view('admin.show')->with(['user' => $user]);
    }

    public function downloadDoc($file)
    {
        if (Storage::disk('private')->has($file)) {
            return Storage::disk('private')->download($file);
        }
        return abort(404);
    }
}
