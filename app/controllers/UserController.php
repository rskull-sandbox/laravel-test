<?php

class UserController extends BaseController
{
    /**
     * User Page
     */
    public function getIndex()
    {
        $users = User::all();
        return View::make('users')->with(array(
            'users' => $users
        ));
    }

}

