@extends('layouts.main')




@section('container')
<h1>Ini Halaman Tambah data</h1>
<form action="/home/haladmin/berita/{{$editberita->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf


        <div class="form-group">
          <label for="nama">Masukan judul berita</label>
          <input type="text"  name="judul" class="form-control"  value="{{$editberita->judul}}" placeholder="Judul berita">
        </div>
        <div class="form-group">
            <label for="judul">Masukan isi berita</label>
            <input type="text"  name="isi" class="form-control" value="{{$editberita->isi}}"  placeholder="isi berita">
        </div>

        <button type="submit" class="btn btn-primary m-3">Submit</button>

    </form>
@endsection


