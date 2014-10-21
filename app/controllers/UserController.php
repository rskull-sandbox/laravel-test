<?php

class UserController extends BaseController
{
    public function getWelcome()
    {
        $users = User::all();
        return View::make('users')->with('users', $users);
    }
}

