<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Student::where('nama','LIKE','%',$request->search.'%')->paginate(5);
        }else{
            $data = Student::paginate(5);
        }

        $data = Student::paginate(5);
        return view('portofolio',compact('data'));
    }

    public function tambahportofolio()
    {
        return view('tambahdata');
    }
}
