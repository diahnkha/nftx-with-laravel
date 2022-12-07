<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <a href="{{ route('user.list') }}"><button>Kembali</button></a>
    <form method="post" action="{{ route('user.update', ["id" => $user->id]) }}">
        @method("put")
        @csrf
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="{{ $user->nama }}"><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email" value="{{ $user->email }}"><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" value="{{ $user->password }}"><br>

        <label for="role">Role :</label>
        <select name="role" id="role">
            <option value="1" {{ $user->role == 1 ? "selected" : ""}}>Admin</option>
            <option value="1" {{ $user->role == 2 ? "selected" : ""}}>User</option>
            <option value="1" {{ $user->role == 3 ? "selected" : ""}}>Guest</option>
        </select>

        <button type="Submit" @class(["btn", "btn-primary"])>Tambah</button>

    </form>

</body>
</html>
