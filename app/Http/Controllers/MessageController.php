<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Http\Requests\MessageRequest;
use App\Models\User;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmin::class);
    }

    public function create(MessageRequest $request, User $user)
    {
        $user->messages()->create([
            'content' => $request->input('content')
        ]);

        return back();
    }
}
