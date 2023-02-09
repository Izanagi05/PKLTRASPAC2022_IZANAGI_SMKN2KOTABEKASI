@extends('layouts.main')




@section('container')


        <div class="row d-flex justify-content-center" style="margin-top:216px;">
            <div class="col text-center">
                <h1>Our Mentor</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center" style="margin-top:127px;">
            <div class="col text-center">
                <h2>Mas Budi</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center" style="margin-top:289px;">
            <div class="col text-center">
                <h2>Mas Dion</h2>
            </div>
            <div class="col text-center">
                <h2>Mas Hanif</h2>
            </div>
            <div class="col text-center">
                <h2>Mas Angga</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center" style="margin-top:159px;">
            <div class="col text-center">
                <h2>Mas Fajar</h2>
            </div>
            <div class="col text-center">
                <h2>Mas Ryan</h2>
            </div>
            <div class="col text-center">
                <h2>Mas Alfian</h2>
            </div>
        </div>
        ini home

        <div class="projek " style="padding-top:200px;">
            <div class="row text-center" style="padding-bottom:100px;">
                <div class="col">
                    <h1>Timwok’s Project</h1>
                </div>
            </div>
            <div class="row">
            @foreach ($projek as $prj)
                <div class="col text-center">
                    <div class="card">
                        <div class="row">
                            <h3>{{$prj->judul}}</h3>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <img src="{{asset('uploadprojek/'.$prj->image)}}" style="width: 200px;" alt="" srcset="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <div class="">
            <div class="row text-center">
                <h1>Berita</h1>
                @foreach ($berita as $brt)
                <div class="col-4 text-center">
                    <div class="card">
                        <div class="row">
                            <h3>{{$brt->judul}}</h3>
                        </div>
                        <div class="row ">
                            <p>{{$brt->isi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
@endsection
