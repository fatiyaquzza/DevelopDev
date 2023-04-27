<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class Layout extends Controller
{
    public function  index(){
       return  View('layout.main');
    }

    public function Home(){
        return View('layout.Home');
    }
}

=======
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

class Layout extends Controller
{
    public function index()
    {
        return View('Layout.main');
    }

    public function home()
    {
        return View('Layout.home');
    }
}
>>>>>>> main
