<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\berita;
// use App\Models\User;
use Illuminate\Http\Request;

class ShowDataController extends Controller
{
    public function index(){
        $beritashow = berita::get();
        $projekshow = project::get();
        // $userr = User::get();
        return view('home', [
            'berita'=>$beritashow,
            // 'user'=>$userr,
            'projek'=>$projekshow
        ]);

    }
}
