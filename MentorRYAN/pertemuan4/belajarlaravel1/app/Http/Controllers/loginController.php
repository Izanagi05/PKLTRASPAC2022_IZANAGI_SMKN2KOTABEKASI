<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class loginController extends Controller
{
    public function get(){
        $data = LoginModel::get();
        return $data;

    }
}
