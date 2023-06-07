@extends('layouts.app')

@section('content')

<div class="container">
<div class="card">
    <div class="card-header">
        <h3>Manajemen User</h3>
    </div>
    <div class="card-body">
        <a href="{{route ('user.create')}}">Tambah Data User</a>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <th>Role</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
            @foreach ($datauser as $s)
                <tr>
                    <td>{{$s->name}} </td>
                    <td>{{$s->role}} </td>
                    <td>{{$s->email}} </td>
                    <td>
                        <ul class="nav">
                            <a href="{{route ('siswa.show', $s->id)}}" class="btn btn-success mr-2">Show</a>
                            <a href="{{route ('user.edit', $s->id)}}" class="btn btn-primary mr-2">Edit</a>
                            <form action="{{route ('siswa.destroy', $s->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-warning">Delete</button>
                          </form>  
                      </ul>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

</div>
</div>
    
@endsection