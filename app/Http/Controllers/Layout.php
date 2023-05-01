<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
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
=======
use Illuminate\Http\Request;

class Layout extends Controller
{
    public function index(){
        return View('Layout.main');
}
    public function home(){
>>>>>>> Stashed changes
        return View('Layout.home');
    }
}
>>>>>>> main
=======
    public function index()
    {
        return View('layout.main');
    }
}
>>>>>>> Stashed changes
