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
    <form method="post" action="{{ route('user.create')}}">
        @csrf
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama"><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email"><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password"><br>

        <label for="role">Role :</label>
        <select name="role" id="role">
            <option value="1">Admin</option>
            <option value="2">User</option>
            <option value="3">Guest</option>
        </select>

        <button type="Submit" @class(["btn", "btn-primary"])>Tambah</button>

    </form>

</body>
</html>
