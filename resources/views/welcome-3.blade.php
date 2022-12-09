@php
$user = [
    [
        user = [
            "nama" => "",
            "foto" => "",
            "bio" => "",
            "active" => false,
            "alamat" => "",
            "role" => "admin/user"
        ],
    ];
    @show = [
        "active" => true,
        "role" => "admin"
    ];

@endphp

parent view:
//yang isinya title dan icon yang dinamis

component card:
//isinya buat biodata user

child view:
//extend dari parent view
//tambahkan variable user min 10 dan show
//menampilkan filter yang dibuat

//up ke github, nama-tugas-laravel1
