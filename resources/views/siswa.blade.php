@extends('layouts.app')

@section('content')

<h3>Data Siswa</h3>
        <table class="table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Email</th>
            </tr>
            @foreach ($datasiswa as $s)
            <tr>
                <td>{{$s->name}} </td>
                <td>{{$s->nis}} </td>
                <td>{{$s->email}} </td>
            </tr>
            @endforeach
            
        </table>
    
@endsection