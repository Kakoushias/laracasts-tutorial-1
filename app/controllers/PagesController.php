<?php

namespace App\Controllers;



class PagesController
{
    public function home()
    {



        return view('index');


    }

    public function about()
    {
        $company = 'Laracasts';
        return view('about', ['company'=> $company]);


    }

    public function contact()
    {

        return view('contact');


    }

}




/**
 * Created by PhpStorm.
 * User: Kakou-Dev
 * Date: 9/29/2017
 * Time: 8:26 PM
 */