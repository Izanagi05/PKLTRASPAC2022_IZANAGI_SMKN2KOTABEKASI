@extends('layouts.main')




@section('container')
<h1>Ini Halaman Tambah data</h1>
<form action="/home/haladmin/projek" method="POST" enctype="multipart/form-data">
    @csrf


        <div class="form-group">
          <label for="nama">Masukan judul projek</label>
          <input type="text"  name="judul" class="form-control"  placeholder="Judul projek">
        </div>
        <div class="form-group">
          <label for="judul">Masukan foto</label>
          <input type="file"  name="image" class="form-control" placeholder="image">
        </div>

        <button type="submit" class="btn btn-primary m-3">Submit</button>

    </form>
@endsection


