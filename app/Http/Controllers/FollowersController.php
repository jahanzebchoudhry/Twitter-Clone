<?php

namespace App\Http\Controllers;

use  App\User;

class FollowersController extends Controller
{
    public function store(User $user)
    {
        auth()->user()->toggleFollow($user);

        return back();
    }
}
