<?php


namespace App\Http\Controllers\Admin;


use App\Models\User;

class UserController
{

    public function index()
    {
        return view('admin.users');

            /*, [
            'posts' => User::get()
        ]);*/
    }


}
