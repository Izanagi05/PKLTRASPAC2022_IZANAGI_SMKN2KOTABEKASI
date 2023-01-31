@extends('layouts.main')




@section('container')
<h1>Ini Halaman Tambah data</h1>
<form action="/crud" method="POST">
    @csrf
    {{-- <input type="text" placeholder="NAMA">
    <input type="text" placeholder="KELAS">
    <input type="text" placeholder="ALAMAT">
    <input type="date" placeholder="ALAMAT">
    <button type="submit">Submit</button> --}}

        <div class="form-group">
          <label for="nama">Masukan nama</label>
          <input type="text"  name="nama" class="form-control"  placeholder="Nama">
        </div>
        <div class="form-group">
          <label for="kelas">Masukan kelas</label>
          <input type="text"  name="kelas" class="form-control"  placeholder="Kelas">
        </div>
        <div class="form-group">
          <label for="alamat">Masukan alamat</label>
          <input type="text"  name="alamat" class="form-control" placeholder="Alamat">
        </div>
        <div class="form-group">
          <label for="tanggallahir">Masukan tanggal lahir</label>
          <input type="date"   name="tgllahir"class="form-control" placeholder="tanggal lahir">
        </div>
        <button type="submit" class="btn btn-primary m-3">Submit</button>

    </form>
@endsection


