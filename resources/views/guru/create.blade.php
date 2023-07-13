@extends('layouts.app')
@extends('layouts.dashboard')
@section('content')

<style>
    .form-container {
        display: flex;
        justify-content: flex-start;
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
            margin-left: 150px;
        }
</style>
<div class="table-left">
    <h2>Input Data Guru</h2>
 <div class="form-container">
    <form action="{{ url('/guru') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Nama Kelas</label>
            <select class="form-select" id="inputGroupSelect01" name="guru_id_nip" id="guru_id_nip">
                <option selected>Pilih Nama Kelas...</option>
                @foreach ($rowKelas as $kelasItem)
                    <option value="{{ $kelasItem->kelas_id }}">{{ $kelasItem->kelas_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">Nomor Pin</label>
            <input type="text" name="guru_no" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Nama Guru</label>
            <input type="text" name="guru_nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Alamat Guru</label>
            <input type="text" name="guru_alamat" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No Hp Guru</label>
            <input type="text" name="guru_hp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Ktp Guru</label>
            <input type="text" name="guru_ktp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Mata Pelajaran</label>
            <input type="text" name="guru_jenis" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Kelas</label>
            <input type="text" name="guru_kelas" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Status Guru Aktif</label>
        </div>
        <div class="mb-3">
            <input class="form-check-input" type="radio" name="guru_aktif" id="inlineCheckbox1" value="Y">
            <label class="form-check-label" for="inlineCheckbox1">YA</label>
        </div>
        <div class="mb-3">
            <input class="form-check-input" type="radio" id="inlineCheckbox2" name="guru_aktif" value="N">
            <label class="form-check-label" for="inlineCheckbox2">NO</label>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">ID User Guru</label>
            <select class="form-select" id="inputGroupSelect01" name="guru_id_user" id="guru_id_user">
                <option selected>Pilih User Guru...</option>
                @foreach ($rowsUser as $Userrow)
                    <option value="{{ $Userrow->id }}">{{ $Userrow->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-dark">
        </div>
    </form>
@endsection
