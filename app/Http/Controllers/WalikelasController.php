<?php

namespace App\Http\Controllers;

use App\Models\Walikelas;
use Illuminate\Http\Request;

class WalikelasController extends Controller
{
    public function index(){

        $data = Walikelas::all();
        return view('datawalikelas', compact('data'));
    }

    public function tambahwalikelas(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        // dd($requet->all());
        Walikelas::create($request->all());
        return redirect()->route('walikelas');
    }
}
