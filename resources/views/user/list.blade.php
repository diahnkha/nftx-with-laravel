<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
    <a href="{{ route('user.store') }}"><button>Tambah user</button></a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Aktif</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        @switch($user->role)
                            @case(1) ADMIN @break
                            @case(2) USER @break
                            @default Guest
                        @endswitch
                    </td>
                    <td>{{ $user->aktif ? "Ya" : "Tidak" }}</td>

                    <td>
                        <a href="{{ route('user.detail',['id'=>$user->id]) }}">
                            <button>Detail</button>
                        </a>
                        <a href="{{ route('user.destroy',['id'=>$user->id]) }}">
                            <button>Hapus</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
