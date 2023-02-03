<?php

namespace App\Http\Controllers;

use App\Models\LevelUser;
use Illuminate\Http\Request;

class LeveluserController extends Controller
{
    public function index(){

        $data = LevelUser::all();
        return view('dataleveluser', compact('data'));
    }

    public function tambahleveluser(){
        return view('tambahleveluser');
    }

    public function insertleveluser(Request $request){
        // dd($request->all());
        LevelUser::create($request->all());
        return redirect('/dashboard/leveluser')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampilleveluser($id = null){
        $data = LevelUser::where('kode_level', $id)->first();
        dd('ppp');
        return view('tampilleveluser', compact('data'));
    }

    public function updateleveluser(Request $request, $id){
        $data = LevelUser::find($id);
        $data->update($request->all());

        return redirect('/dashboard/leveluser')->with('success', 'Data Berhasil Di Perbarui');
    }

}
