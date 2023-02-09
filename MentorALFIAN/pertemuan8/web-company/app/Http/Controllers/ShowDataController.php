<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\berita;
use Illuminate\Http\Request;

class ShowDataController extends Controller
{
    public function index(){
        $beritashow = berita::get();
        $projekshow = project::get();
        return view('home', [
            'berita'=>$beritashow,
            'projek'=>$projekshow
        ]);

    }
}
