@extends('layouts.main')

@section('container')

<div>
    <h1>Tambah data projek</h1>
   
    <form action="/home/haladmin/projek/create" method="GET">
        <button type="submit" class="btn btn-primary">Tambah data</button>
    </form>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Judul projek</th>
            <th scope="col">Projek</th>
          </tr>
        </thead>
        <tbody>
            {{-- {{$kelas}} --}}
            @foreach ($projek as $prj)

            <tr>
                <td>{{$prj->judul}}</td>
                <td>
                    <img src="{{asset('uploadprojek/'.$prj->image)}}" style="width: 200px;" alt="" srcset="">
                </td>
                <td><a href="/home/haladmin/projek/{{$prj->id}}/edit" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="/home/haladmin/projek/{{$prj->id}}" method="post">
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
