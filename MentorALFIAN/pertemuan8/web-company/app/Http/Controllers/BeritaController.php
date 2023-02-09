<?php

namespace App\Http\Controllers;

// use App\Models\project;
use App\Models\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritaa = berita::get();
        // $projekk = project::get();
        return view('admin.homeadminbr',[
            'berita'=>$beritaa,
            // 'projek'=>$projekk,
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
        return view('admin.upbrt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'judul'=>'required|max:100',
            'isi'=>'required|max:255'
        ]);
        berita::create($validasi);

        return redirect('/home/haladmin/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(berita $berita, $id)
    {
        $editberitas = berita::find($id);
        return view('admin.upbrt.edit', [
            'editberita' => $editberitas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berita $berita, $id)
    {
        $validasi = $request->validate([
            'judul'=>'required|max:100',
            'isi'=>'required|max:255'
        ]);
        berita::where('id', $id)->update($validasi);
        return redirect('/home/haladmin/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(berita $berita, $id)
    {
        berita::where('id', $id)->delete();
        return redirect('/home/haladmin/berita');

    }
}
