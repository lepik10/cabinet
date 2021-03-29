<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminActivateController extends Controller
{
    public function __invoke(User $user)
    {
        switch($user->status) {
            case 0: $user->status = 1; break;
            case 1: $user->status = 0; break;
        }

        $user->save();

        return back();
    }
}
