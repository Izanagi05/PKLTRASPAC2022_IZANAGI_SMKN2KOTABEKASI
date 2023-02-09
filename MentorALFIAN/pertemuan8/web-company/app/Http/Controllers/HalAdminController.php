<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalAdminController extends Controller
{
    public function index(){
        return view('admin.adminhome');
    }
}
