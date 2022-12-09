<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index() {
        $users = User::query()
            ->limit(5)
            ->offset(0) //index, ambil dari index ke berapa
            ->get();
        return view("user.list", ["users" => $users]);
    } //menampilkan seluruh data

    function detail($id) {
        $user = User::query()
            ->where("id", $id)
            ->first();
        return view("user.detail", ["user" => $user]);
    } //menampilkan sebuah data

    function store() {
        return view("user.store");
    } //tampilan menambah data

    function create(Request $request) {
        $payload = [
            "nama" => $request->input("nama"),
            "email" => $request->input("email"),
            "password" => $request->input("password"),
            "role" => $request->input("role")
        ];

        User::query()->create($payload);
        return redirect()->back();//kehalaman sebelumnya

    } //menambah data

    function update(Request $request, $id) {
        $user = User::query()
            ->where("id", $id)
            ->first();
        $user->fill($request->all()); //ngisi apa yang udh diubah sama user karena gatau apa yang diubah user, entah idnya aja entah email aja
        $user->save();
        return redirect()->back();//kehalaman sebelumnya
    } //mengupdate data




    function destroy($id) {
        $user = User::query()
            ->where("id", $id)
            ->delete();
        return redirect()->back();//kehalaman sebelumnya
    } //menghapus data


    // function create(Request $request){
    //     $request->get("nama");
    //     $request->all();
    //     $request->post("nama");
    //     $request->acceptsJson();
    //     $request->allFiles();
    //     $request->bearerToken();

    //     $request->session();
    //     session();
    //     $request->url();
    //     // Bearer <token>
    //     // username:password
    //     // <token>
    // }
}
