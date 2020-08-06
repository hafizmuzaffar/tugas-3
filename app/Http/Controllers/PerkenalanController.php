<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkenalanController extends Controller {
    
    public function form()
    {
        return view('form');
    }

    public function selamat_datang(Request $request){
        $first_name = $request["first_name"];
        $last_name = $request["last_name"];
        return view('welcome', ["name" => $first_name , "last_name" => $last_name]);
    }

}