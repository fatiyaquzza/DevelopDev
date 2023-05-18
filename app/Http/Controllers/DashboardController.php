<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // $murid = DB::table('students')->get();
        $rpl = Student::where('bidang_minat', 'RPL')->count();
        $dm = Student::where('bidang_minat', 'DM')->count();
        $sig = Student::where('bidang_minat', 'SIG')->count();
        $jaringan = Student::where('bidang_minat', 'Jaringan')->count();


    return view('layout.Home', [
        'rpl' => $rpl,
        'dm' => $dm,
        'sig' => $sig,
        'jaringan' => $jaringan,
    ]);
    }

}