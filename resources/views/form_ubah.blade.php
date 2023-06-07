@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route ('siswa.index')}}" class="btn btn-primary">Kembali</a>
            <form action="{{route ('siswa.update', $datasiswa->id)}}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="inputName" required value="{{$datasiswa->name}}">
                    NIS <input type="text" name="inputNis" required value="{{$datasiswa->nis}}">
                    Email <input type="text" name="inputEmail" required value="{{$datasiswa->email}}">
                    {{-- Password <input type="text" name="inputPassword" required> --}}
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>

@endsection