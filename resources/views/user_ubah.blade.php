@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data User</h3>
        </div>
        <div class="card-body">
            <a href="{{route ('user.index')}}" class="btn btn-primary">Kembali</a>
            <form action="{{route ('user.update', $datauser->id)}}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="inputName" required value="{{$datauser->name}}">
                    role <input type="text" name="inputRole" required value="{{$datauser->role}}">
                    Email <input type="text" name="inputEmail" required value="{{$datauser->email}}">
                    Password <input type="text" name="inputPassword" >
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>

@endsection
