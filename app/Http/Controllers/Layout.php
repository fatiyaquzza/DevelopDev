<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Layout extends Controller
{
    public function index()
    {
        return  View('layout.main');
    }

    public function Home()
    {
        return View('layout.Home');
    }

    public function layout()
    {
        return View('students.layout');
    }
}
