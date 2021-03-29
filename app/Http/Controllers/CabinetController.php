<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Middleware\IsDocumentBelongsToUser;
use App\Http\Middleware\UserAccessible;

class CabinetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(UserAccessible::class);
        $this->middleware(IsDocumentBelongsToUser::class)->only('downloadDoc');
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

    public function downloadDoc($file)
    {
        if (Storage::disk('private')->has($file)) {
            return Storage::disk('private')->download($file);
        }
        return abort(404);
    }
}
