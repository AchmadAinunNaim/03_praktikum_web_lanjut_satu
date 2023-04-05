<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kampus;

class kampusController extends Controller
{
    // 
    function show(){
        $dataUser=kampus::all();
        return view('experience',['dataList' => $dataUser]);

    }
}
