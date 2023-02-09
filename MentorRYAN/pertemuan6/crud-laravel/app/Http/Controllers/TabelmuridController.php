<?php

namespace App\Http\Controllers;

use App\Models\tabelmurid;
use App\Models\kelas;
use App\Http\Requests\StoretabelmuridRequest;
use App\Http\Requests\UpdatetabelmuridRequest;

class TabelmuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StoretabelmuridRequest $request)
    {

        if($request->has('search')){

            $muridss= tabelmurid::where('nama', 'LIKE', '%'.$request->search.'%')->orWhere('kelas_id', 'LIKE', '%'.$request->search.'%')->orWhere('alamat', 'LIKE', '%'.$request->search.'%')->get();

        }else{
            // $searchku =tabelmurid::get();
            $muridss = tabelmurid::get();
            // $kelass = kelas::get();
        }
        return view('crud',[
            'murids'=>$muridss,
            // 'kelass'=>$kelass,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelass = kelas::get();
        $muridss = tabelmurid::get();
        return view('create', [
            'murids'=>$muridss,
            'kelas'=>$kelass
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabelmuridRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretabelmuridRequest $request)
    {
        // tabelmurid::create([
        //     "nama"=> $request->nama,
        //     "kelas"=> $request->kelas,
        //     "alamat"=> $request->alamat,
        //     "tgllahir"=> $request->tgllahir,
        // ]);
        $validasi = $request->validate([
            'nama' => 'required|max:255',
            'kelas_id' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tgllahir' => 'required|max:255',
        ]);
        tabelmurid::create($validasi);
        return redirect('/crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabelmurid  $tabelmurid
     * @return \Illuminate\Http\Response
     */
    public function show(tabelmurid $tabelmurid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabelmurid  $tabelmurid
     * @return \Illuminate\Http\Response
     */
    public function edit(tabelmurid $tabelmurid, $id)
    {
        $editmurids = tabelmurid::find($id);
        $kelass = kelas::get();
        $kelasf = kelas::find($editmurids->kelas_id );
        return view('edit', [
            'kelass'=>$kelass,
            'kelasf'=>$kelasf,
            'editmurid' => $editmurids
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabelmuridRequest  $request
     * @param  \App\Models\tabelmurid  $tabelmurid
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetabelmuridRequest $request, tabelmurid $tabelmurid, $id)
    {

        $validasi = $request->validate([
            'nama' => 'required|max:255',
            'kelas_id' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tgllahir' => 'required|max:255',
        ]);
        tabelmurid::where('id', $id)->update($validasi);
        // tabelmurid::where('id', $id)->update([
        //     "nama"=>$request->nama,
        //     "kelas"=>$request->kelas,
        //     "alamat"=>$request->alamat,
        //     "tgllahir"=>$request->tgllahir,
        // ]);
        return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabelmurid  $tabelmurid
     * @return \Illuminate\Http\Response
     */
    public function destroy(tabelmurid $tabelmurid, $id)
    {
        tabelmurid::where('id', $id)->delete();
        // tabelmurid::delete($tabelmurid->id);
        return redirect('/crud');
    }

    public function cari(StoretabelmuridRequest $request)
    {


    }
}
