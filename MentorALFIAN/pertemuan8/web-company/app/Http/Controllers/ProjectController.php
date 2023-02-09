<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\berita;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projekk = project::get();
        // $beritaa = berita::get();

    return view('admin.homeadminpj',[
        'projek'=>$projekk,
        // 'berita'=>$beritaa,
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

        return view('admin.uppjk.create',[
            // 'projek'=>$projekk,
        ]);
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
            'judul' => 'required|max:255',
            'image' => 'required|max:255',
            // 'image' =>'image|file|max:10240',
        ]);
        $upprjk = project::create($validasi);
        if($request->hasFile('image')){
            $request->file('image')->move('uploadprojek/', $request->file('image')->getClientOriginalName());
            $upprjk->image= $request->file('image')->getClientOriginalName();
            $upprjk->save();
        }
        return redirect('/home/haladmin/projek');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project, $id)
    {
        $editprojects = project::find($id);
        return view('admin.uppjk.edit', [
            'editprojek' => $editprojects
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project,  $id)
    {
        // $validasi = $request->validate([
        //     'judul' => 'required|max:255',
        //     'image' => 'required|max:255',
        // ]);
         project::where('id', $id)->update([
            'judul' => $request->judul,
            'image' => $request->image
         ]);

        return redirect('/home/haladmin/projek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project, $id)
    {
        $image = project::find($id);

        unlink("uploadprojek/".$image->image);
        project::where('id', $id)->delete();
        // tabelmurid::delete($tabelmurid->id);
        return redirect('/home/haladmin/projek');
        //
    }
}
