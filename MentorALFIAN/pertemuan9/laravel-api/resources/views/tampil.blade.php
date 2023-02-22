<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- <p>{{$dataa}}</p> --}}
    @foreach ($dataa as $dt)

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <td>{{$dt->nama}}</td>
            <td>{{$dt->kelas}}</td>
            <td>{{$dt->alamat}}</td>
        </tr>

    </table>
    @endforeach
</body>
</html>
