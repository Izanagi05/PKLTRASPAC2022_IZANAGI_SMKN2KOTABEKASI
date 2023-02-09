@extends('layouts.main')

@section('container')

<div>
    <h1>Tambah data berita</h1>

    <form action="/home/haladmin/berita/create" method="GET">
        <button type="submit" class="btn btn-primary">Tambah data</button>
    </form>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Judul berita</th>
            <th scope="col">berita</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($berita as $brt)

            <tr>
                <td>{{$brt->judul}}</td>
                <td>{{$brt->isi}}</td>

                <td><a href="/home/haladmin/berita/{{$brt->id}}/edit" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="/home/haladmin/berita/{{$brt->id}}" method="post">
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
