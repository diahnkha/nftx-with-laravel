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

    function upload(Request $request){
        // if ($request->method() == "GET") return view('upload');

        // $file = $request->file("gambar");
        // // $path = $file->store("gambar");

        // // return Storage::download($path);
        // // $file->move("gambar", $file->getClientOriginalName());
        // // $file->move("gambar", uniqid() . "." . $file->getClientOriginalName());
        // $file->move("gambar", $file->hashName());
        // // $path = $request->getHost() . "/gambar/" . $file->hashName();

        if ($request->method() == "GET") return view('upload');

        $file = $request->file("gambar");
        $filename = $file->hashName();
        $file->move("gambar", $filename);
        $path = $request->getHost() . "/gambar/" . $filename;

        return redirect()->back();
    }

}
