<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <a href="{{ route('sekolah.list') }}"><button>Kembali</button></a>
    <form method="post" action="{{ route('sekolah.create')}}">
        @csrf
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama"><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email"><br>

        <label for="alamat">Alamat :</label>
        <input type="alamat" name="alamat" id="alamat"><br>

        <label for="jenis_sekolah">Jenis_Sekolah :</label>
        <select name="jenis_sekolah" id="jenis_sekolah">
            <option value="1">SD</option>
            <option value="2">SMP</option>
            <option value="3">SMA</option>
        </select>

        <button type="Submit" @class(["btn", "btn-primary"])>Tambah</button>

    </form>

</body>
</html>
