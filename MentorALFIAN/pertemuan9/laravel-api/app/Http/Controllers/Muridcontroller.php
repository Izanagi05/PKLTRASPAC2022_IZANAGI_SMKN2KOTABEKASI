<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\pelajaran;
use App\Models\siswapelajaran;

class Muridcontroller extends Controller
{

    public function index(){


        $data = siswa::get();
        // $tes =json_encode($data);
        // dd($data[1]->SiswaPelajaran[1]->Siswa  );
        // return response()->json($data, 200  );

        foreach($data as $key=> $dt){
            $data[$key]['Pelajaran']=$dt->SiswaPelajaran[0]->Pelajaran;
        }
        return response()->json($data, 200  );
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
