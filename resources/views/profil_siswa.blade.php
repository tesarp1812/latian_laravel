@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-header">
                <h3>Profil Siswa</h3>
            </div>
            <div class="card-body">
                    <a href="{{route ('siswa.index')}}">Kembali</a>
                    <div class="row ml-2">
                        <h4 class="col-4">Nama</h4>
                        <h4>: {{$datasiswa->name}}</h4>
                    </div>
                    <div class="row ml-2">
                        <h4 class="col-4">NIS</h4>
                        <h4>: {{$datasiswa->nis}}</h4>
                    </div>
                    <div class="row ml-2">
                        <h4 class="col-4">Email</h4>
                        <h4>: {{$datasiswa->email}}</h4>
                    </div>
            </div>
        </div>
    </div>
@endsection