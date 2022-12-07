<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    function index() {
        $sekolahs = Sekolah::query()
            ->limit(5)
            ->offset(0) //index, ambil dari index ke berapa
            ->get();
        return view("sekolah.list", ["sekolahs" => $sekolahs]);
    } //menampilkan seluruh data

    function detail($id) {
        $sekolah = Sekolah::query()
            ->where("id", $id)
            ->first();
        return view("sekolah.detail", ["sekolah" => $sekolah]);
    } //menampilkan sebuah data

    function store() {
        return view("sekolah.store");
    } //tampilan menambah data

    function create(Request $request) {
        $payload = [
            "nama" => $request->input("nama"),
            "email" => $request->input("email"),
            "alamat" => $request->input("alamat"),
            "jenis_sekolah" => $request->input("jenis_sekolah"),
        ];

        Sekolah::query()->create($payload);
        return redirect()->back();//kehalaman sebelumnya

    } //menambah data

    function update(Request $request) {
        $user = Sekolah::query()
            ->where("id", $id)
            ->first();
        $user->fill($request->all()); //ngisi apa yang udh diubah sama user karena gatau apa yang diubah user, entah idnya aja entah email aja
        $user->save();
        return redirect()->back();//kehalaman sebelumnya
    } //mengupdate data




    function destroy($id) {
        $user = Sekolah::query()
            ->where("id", $id)
            ->delete();
        return redirect()->back();//kehalaman sebelumnya
    } //menghapus data
}
