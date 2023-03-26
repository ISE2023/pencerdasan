<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    //
    function getData(Request $req){
        $validatedData = $req->validate([
            'email' => 'required|email',
            'idNum' => 'required|min:8|',
            'userName' => 'required',
            'accountType' => 'required',
            'gender' => 'required',
        ]);
        dd($validatedData);
    }
}
