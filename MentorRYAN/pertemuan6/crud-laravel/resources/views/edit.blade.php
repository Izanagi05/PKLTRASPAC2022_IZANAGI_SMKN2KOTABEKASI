@extends('layouts.main')

@section('container')
<h1>Ini Halaman Edit</h1>
<form action="/crud/{{$editmurid->id}}" method="POST">
    @method('PUT')
    @csrf

<div class="form-group">
    <label for="nama">Masukan nama</label>
    <input type="text"  name="nama" class="form-control" value="{{$editmurid->nama}}"  placeholder="Nama">
  </div>
  <div class="form-group">
      {{-- {{$kelasf}} --}}
    <label for="kelas">Masukan kelas</label>
    <select name="kelas_id">

        {{-- <option value="{{$editmurid->kelass->id}}">{{$editmurid->kelass->namakelas}}</option> --}}
        {{-- <option value="{{$editmurid->kelass->id}}">{{$kelasf->namakelas}}</option> --}}
        @foreach($kelass as $k)
        {{-- <option value="{{$k->id}}">{{$k->namakelas}}</option> --}}
        <option value="{{$k->id}}" {{old('kelas_id', $editmurid->kelas_id) == $k->id ? 'selected' : null}}>{{$k->namakelas}}</option>
        @endforeach
      </select>
  </div>
  <div class="form-group">
    <label for="alamat">Masukan alamat</label>
    <input type="text"  name="alamat" class="form-control" value="{{$editmurid->alamat}}" placeholder="Alamat">
  </div>
  <div class="form-group">
    <label for="tanggallahir">Masukan tanggal lahir</label>
    <input type="date"   name="tgllahir"class="form-control" value="{{$editmurid->tgllahir}}" placeholder="Tanggal lahir">
  </div>
  <button type="submit" class="btn btn-primary m-3">Update</button>
</form>
@endsection
