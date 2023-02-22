<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class Muridcontroller extends Controller
{
    public function index(){

        $data = siswa::get();
        return response()->json($data, 200);
    }
    public function show($id){

        $data = siswa::where('id', $id)->get();
        return response()->json($data, 200);
    }

    public function insert(Request $request){
        siswa::create([
            "nama" => $request->nama,
            "kelas" => $request->kelas,
            "alamat" => $request->alamat
        ]);


    }
    public function update(Request $request ){
        $data = siswa::where('id', $request->id)->update([
            // "id" => $request->id,
            "nama" => $request->nama,
            "kelas" => $request->kelas,
            "alamat" => $request->alamat
        ]);

        // dd($id);
        return response()->json($data, 200);
    }
    public function destroy($id){
        $data = siswa::where('id', $id)->delete();
        return response()->json($data, 200);
    }
}
