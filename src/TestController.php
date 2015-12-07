<?php

namespace mantas\core;

use App\Http\Controllers\Controller;
use App\User;

class TestController extends Controller {

    public function index()
    {
        $users = User::all();

        return view('core::test')->with('users', $users);
    }
}