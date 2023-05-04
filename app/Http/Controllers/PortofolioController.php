<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;

class PortofolioController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Portofolio::where('nama','LIKE','%',.$request->search.'%')->paginate(5);
        }else{
            $data = Portofolio::paginate(5);
        }

        $data = Portofolio::paginate(5);
        return view('portofolio',compact('data'));
    }

    public function tambahportofolio(){
        return view('tambahdata');
    }
}
