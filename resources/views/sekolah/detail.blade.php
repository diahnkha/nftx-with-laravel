<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Sekolah</title>
</head>
<body>
    <a href="{{ route('sekolah.list') }}"><button>Kembali</button></a>
    <form method="post" action="{{ route('sekolah.update', ['id' => $sekolah->id]) }}">
        @method("put")
        @csrf
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="{{ $sekolah->nama }}"><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email" value="{{ $sekolah->email }}"><br>

        <label for="alamat">Alamat :</label>
        <input type="alamat" name="alamat" id="alamat" value="{{ $sekolah->alamat }}"><br>

        <label for="jenis_sekolah">Jenis_Sekolah :</label>
        <select name="jenis_sekolah" id="jenis_sekolah">
            <option value="1" {{ $sekolah->jenis_sekolah == 1 ? "selected" : ""}}>SD</option>
            <option value="2" {{ $sekolah->jenis_sekolah == 2 ? "selected" : ""}}>SMP</option>
            <option value="3" {{ $sekolah->jenis_sekolah == 3 ? "selected" : ""}}>SMA</option>
        </select>

        <button type="Submit" @class(["btn", "btn-primary"])>Edit</button>

    </form>

</body>
</html>
