<?php

namespace App\Http\Controllers;

class Controller extends WebController
{

    // public function __construct()
    // {
    //     $this->middlware('admin');
    // }
    public function index()
    {
        return view('website.website');
    }

    public function department()
    {
        return view('website.department');
    }

    public function contact(){
        return view('website.contact');
    }
    public function dashboard(){

        return view('maindashboard');
    }
}
