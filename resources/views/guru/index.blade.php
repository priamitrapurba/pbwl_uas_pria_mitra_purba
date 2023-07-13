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
            margin-right: 0px;
            margin-left: 0px;
        }

        .table-left {
            text-align: left;
            margin-right: 0px;
            margin-left: 80px;
        }
    </style>
     <div class="table-container">  
    <h2 class="table-left">Data Guru
        <a class="btn btn-success btn-sm float-end" href="{{ url('guru/create') }}">Tambah Guru</a>
    </h2>
    <div class="table-container">
    <table class="table table-hover table-bordered ">

        <tr class="table-primary">
            <th id="">ID Guru</th>
            <th id="">Nama Kelas</th>
            <th id="">Nomor Pin</th>
            <th id="">Nama Guru</th>
            <th id="">Alamat Guru</th>
            <th id="">No Hp Guru</th>
            <th id="">Ktp Guru</th>
            <th id="">Mata Pelajaran</th>
            <th id="">Kelas</th>
            <th id="">Status Mengajar</th>
            <th id="">ID User Guru</th>
            <th id="">EDIT</th>
            <th id="">DELETE</th>
        </tr>
        @foreach ($rows as $row)
            <tr class="table-light">
                <td>{{ $row->guru_id }}</td>
                <td>{{ $row->kelas->kelas_nama }}</td>
                <td>{{ $row->guru_no }}</td>
                <td>{{ $row->guru_nama }}</td>
                <td>{{ $row->guru_alamat }}</td>
                <td>{{ $row->guru_hp }}</td>
                <td>{{ $row->guru_ktp }}</td>
                <td>{{ $row->guru_jenis }}</td>
                <td>{{ $row->guru_kelas }}</td>
                <td>{{ $row->guru_aktif }}</td>
                <td>{{ $row->user->name }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url('guru/' . $row->guru_id . '/edit') }}">Edit</a>
                </td>
                <td>
                    <form class=" btn-sm float-none" action="{{ url('guru/' . $row->guru_id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger justify-content-center">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
