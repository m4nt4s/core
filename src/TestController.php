<?php

namespace mantas\core;

use app\http\controllers\controller;
use app\user;

class TestController extends Controller {

    public function index()
    {
        dd('mantas core');
        $users = User::all();

        return view('mantas::test')->with('users', $users);
    }
}