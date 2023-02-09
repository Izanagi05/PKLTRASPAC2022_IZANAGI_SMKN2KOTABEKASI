@extends('layouts.main')




@section('container')
<h1>Ini Halaman Tambah data</h1>
<form action="/home/haladmin/projek/{{$editprojek->id}}" method="POST">
    @method('PUT')
    @csrf

        <div class="form-group">
          <label for="nama">Masukan judul projek</label>
          <input type="text"  name="judul" class="form-control" value="{{$editprojek->judul}}"  placeholder="Judul projek">
        </div>
        <div class="form-group">
          <label for="judul">Masukan gambar</label>
          <input type="file"  name="image" class="form-control" value="{{$editprojek->image}}"" placeholder="image">
          <img src="{{ asset('uploadprojek/' . $editprojek->image) }}" class="image-pree img-fluid mb-3 col-sm-5 d-block">
        </div>

        <button type="submit" class="btn btn-primary m-3">Submit</button>

    </form>
@endsection


