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
        margin-right: 0px;
        margin-left: 0px;
    }

    .form-container .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
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
        <h3>Edit Data Guru</h3>
        <div class="form-container">
        <form action="{{ url('/guru/' . $row->guru_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Nama Kelas</label>
                <select class="form-select" id="inputGroupSelect01" name="guru_id_nip" id="guru_id_nip">
                    @foreach ($getKelas as $kelasItem)
                        <option value="{{ $kelasItem->kelas_id }}">{{ $kelasItem->kelas_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Nomor Guru</label>
                <input type="text" class="form-control" name="guru_no" value="{{ $row->guru_no }}"></>
            </div>
            <div class="mb-3">
                <label>Nama Guru</label>
                <input type="text" class="form-control" name="guru_nama" value="{{ $row->guru_nama }}"></>
            </div>
            <div class="mb-3">
                <label>Alamat Guru</label>
                <textarea class="form-control" name="guru_alamat">{{ $row->guru_alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label>No Hp Guru</label>
                <input type="text" class="form-control" name="guru_hp" value="{{ $row->guru_hp }}"></input>
            </div>
            <div class="mb-3">
                <label>Ktp Guru</label>
                <input type="text" class="form-control" name="guru_ktp" value="{{ $row->guru_ktp }}"></input>
            </div>
            <div class="mb-3">
                <label>Mata Pelajaran</label>
                <input type="text" class="form-control" name="guru_jenis" value="{{ $row->guru_jenis }}"></input>
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" class="form-control" name="guru_kelas" value="{{ $row->guru_kelas }}"></input>
            </div>
            <div class="mb-3">
                <label for="">Status Guru Aktif</label>
            </div>
            <div class="mb-3">
                <input class="form-check-input" type="radio" name="guru_aktif" id="inlineCheckbox1" value="Y"
                    @if ($row->guru_aktif == 'Y') checked @endif>
                <label class="form-check-label" for="inlineCheckbox1">Y</label>
            </div>
            <div class="mb-3">
                <input class="form-check-input" type="radio" id="inlineCheckbox2" name="guru_aktif" value="N"
                    @if ($row->guru_aktif == 'N') checked @endif>
                <label class="form-check-label" for="inlineCheckbox2">N</label>
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" value="UPDATE">
            </div>

        </form>
    </div>
@endsection
