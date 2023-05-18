<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{
    public function index(){
        return view('contactUs');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = ContactUs::create($request->all());
        session()->flash("success","Success Message");
        return redirect('contactUs');
    }

    public function tampil(){
        $isi = ContactUs::all();
        return view('layout.feedback', compact('isi'));
    }
}