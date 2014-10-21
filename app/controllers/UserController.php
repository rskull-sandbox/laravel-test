<?php

class UserController extends BaseController
{
    public function getWelcome($hoge = null)
    {
        $users = User::all();
        return View::make('users')->with(array(
            'users' => $users,
            'hoge'  => $hoge
        ));
    }
}

