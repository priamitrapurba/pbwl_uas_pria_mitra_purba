@extends('layouts.app')
@extends('layouts.dashboard')
@section('content')
<style>
    .form-container {
        display: flex;
        justify-content: flex-start;
        margin-right: 0px;
        margin-left: 0px;
    }

    .form-container form {
        width: 800px; /* Sesuaikan lebar form sesuai kebutuhan Anda */
        margin-left: 0px;
        margin-right: 0px;
    }

    .form-container .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .form-container .form-group label {
        margin-bottom: 5px;
    }

    .form-container .form-group input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .table-left {
    text-align: left;
    margin-right: 0px;
    margin-left: 100px;
        }
</style>
       <div class="table-left"> 

        <h3>Edit Data Kelas</h3>
        <div class="form-container">
        <form action="{{ url('/kelas/' . $row->kelas_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Kode Kelas</label>
                <input type="text" class="form-control" name="kelas_kode" value="{{ $row->kelas_kode }}"></input>
            </div>
            <div class="mb-3">
                <label>Nama Kelas</label>
                <input type="text" class="form-control" name="kelas_nama" value="{{ $row->kelas_nama }}"></input>
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
