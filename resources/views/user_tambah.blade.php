@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah User</h3>
        </div>
        <div class="card-body">
            <a href="{{route ('user.index')}}" class="btn btn-primary">Kembali</a>
            <form action="{{route ('user.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Nama <input type="text" name="inputName" required>
                    Role <input type="text" name="inputRole" required>
                    NIS <input type="text" name="inputNis" required>
                    Email <input type="text" name="inputEmail" required>
                    Password <input type="text" name="inputPassword" required>
                </ul>
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>

@endsection