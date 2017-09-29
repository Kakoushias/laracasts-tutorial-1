<?php

namespace App\Controllers;

use App\Core\App;


class UsersController
{

    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    public function store(){

        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('users');


    }


}




/**
 * Created by PhpStorm.
 * User: Kakou-Dev
 * Date: 9/29/2017
 * Time: 10:31 PM
 */