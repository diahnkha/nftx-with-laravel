@extends("template")

@section("content")
    @if($tampilkanPeserta)
        <ul>
            @foreach($peserta as $p)
            <li>{{ $p }}</li>
            @endforeach
        </ul>
        @endif
        <a href="{{ route('homepage')}}">Back pakai route name</a>
        <br>
        <a href="/">Back</a>
@endsection

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
</head>
<body>
    @if($tampilkanPeserta)
    <ul>
        @foreach($peserta as $p)
        <li>{{ $p }}</li>
        @endforeach
    </ul>
    @endif
</body>
</html> -->
