<?php

namespace App\Http\Controllers;

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
