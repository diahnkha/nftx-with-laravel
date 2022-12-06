<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function landing(Request $request){
        return view('landing',[
            "judul" => $request->get("title"),
            "peserta" => [
                "Fulan",
                "Fulanah",
                "Isman",
                "Endjie",
                "John Doe",

            ],
            "tampilkanPeserta"=>true
        ]);
    }
}
