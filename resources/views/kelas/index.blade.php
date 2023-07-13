@extends('layouts.app')
@extends('layouts.dashboard')
@section('content')
    <style>
        .content-container {
            display: flex;
            flex-direction: row;
        }

        .aside {
            flex: 1;
            padding-right: 10px;
        }

        .table-container {
            flex: 2;
        }

        .table-left {
            text-align: left;
            margin-right: 0px;
            margin-left: 80px;
        }
    </style>
    <div class="table-container"> 
    <h2 class="table-left">Data Kelas
        <a class="btn btn-success btn-sm float-end" href="{{ url('kelas/create') }}">Tambah Data Kelas</a>
    </h2>
    <div class="table-container">
    <table class="table  table-hover table-bordered">

        <tr class="table-primary">
            <th id="">ID</th>
            <th id="">Kode Kelas</th>
            <th id="">Nama Kelas</th>
            <th id="">EDIT</th>
            <th id="">DELETE</th>
        </tr>
        @foreach ($rows as $row)
            <tr class="table-light">
                <td>{{ $row->kelas_id }}</td>
                <td>{{ $row->kelas_kode }}</td>
                <td>{{ $row->kelas_nama }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url('kelas/' . $row->kelas_id . '/edit') }}">Edit</a>
                </td>
                <td>
                    <form class=" btn-sm float-none" action="{{ url('kelas/' . $row->kelas_id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger justify-content-center">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
