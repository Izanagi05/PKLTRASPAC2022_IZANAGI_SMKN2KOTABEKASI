@extends('layouts.main')

@section('container')
<h1>Halaman crud</h1>

<div>
    <form action="/crud" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search.." name="search">
            <button class="btn btn-danger" type="submit" >Search</button>
        </div>
    </form>
    <form action="/crud/create" method="GET">

        {{-- <a href="/crud/create">Tambah data</a> --}}
        <button type="submit" class="btn btn-primary">Tambah data</button>
    </form>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Kelas id</th>
            <th scope="col">namakelass</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal lahir</th>
          </tr>
        </thead>
        <tbody>
            {{-- {{$kelas}} --}}
            @foreach ($murids as $mrd)

            <tr>
                <td>{{$mrd->nama}}</td>
                {{-- <td>{{$mrd->kelas_id}}</td> --}}
                <td>{{$mrd->kelass->id}}</td>
                <td>{{$mrd->alamat}}</td>
                <td>{{$mrd->tgllahir}}</td>
                <td><a href="/crud/{{$mrd->id}}/edit" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="/crud/{{$mrd->id}}" method="post">
                    @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

</div>
@endsection
