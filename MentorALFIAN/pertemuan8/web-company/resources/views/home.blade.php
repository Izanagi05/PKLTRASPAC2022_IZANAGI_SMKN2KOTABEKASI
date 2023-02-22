@extends('layouts.main')




{{-- @section('container') --}}


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
        <a href="/logout">logout</a>

        <div class="projek text-center " style="padding-top:200px; padding-bottom:47px;">
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
            @if (auth()->user()->level =="admin")

            <a href="/home/haladmin/projek" class="text-decoration-none" style="color:white;
            background:#4AC6D6;
            border-radius:100%;
            padding:10px;">
             <i class="fa fa-plus"></i>
            </a>
            @endif
        </div>

        <div class="text-center" style="background:#FAAB78; padding:200px 185px 142px 185px;">
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

            @if (auth()->user()->level =="admin")

            <a href="/home/haladmin/berita" class="text-decoration-none" style="color:#FAAB78;
            background:white;
            border-radius:100%;
            padding:10px;">
             <i class="fa fa-plus"></i>
            </a>
            @endif
        </div>
        <div class="" style="
        background:#263246;
        padding-top:25px;
        color:white;
        padding-bottom:100px;
        ">
        <h4>Login = {{auth()->user()->level }}</h4>
        <div class="text-center">

            <h3>About us</h3>
        </div>
            <span style="
            border:2px solid #D83A3A;
            padding;20px;
            border-top-right-radius:none;
            border-top-left-radius:none;
            border-bottom-right-radius:none;
            border-bottom-left-radius:none;
            width:20px;
            "></span>

        </div>
        {{-- @endsection --}}
