<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list sekolah</title>
</head>
<body>
    <a href="{{ route('sekolah.store') }}"><button>Tambah sekolah</button></a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Jenis_Sekolah</th>
                <th>Aktif</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sekolahs as $sekolah)
                <tr>
                    <td>{{ $sekolah->nama }}</td>
                    <td>{{ $sekolah->email }}</td>
                    <td>{{ $sekolah->alamat }}</td>
                    <td>
                        @switch($sekolah->jenis_sekolah)
                            @case(1) SD @break
                            @case(2) SMP @break
                            @case(3) SMA @break
                            @default Guest
                        @endswitch
                    </td>
                    <td>{{ $sekolah->aktif ? "Ya" : "Tidak" }}</td>

                    <td>
                        <a href="{{ route('sekolah.detail',['id'=>$sekolah->id]) }}">
                            <button>Detail</button>
                        </a>
                        <a href="{{ route('sekolah.destroy',['id'=>$sekolah->id]) }}">
                            <button>Hapus</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
