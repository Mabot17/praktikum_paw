
@extends('layout.main_layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                <h4>Ubah Data Mahasiswa</h4>
                <div class="d-flex flex-wrap align-items-center">
                    <a type="button" href="{{ route('mahasiswa') }}" class="btn btn-sm btn-warning">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr class="divider">

    <div class="card">
        <div class="card-body">
                <form method="POST" action="{{ route('mahasiswa.api_ubah') }}" enctype="multipart/form-data">
                    @csrf
                    <input value="{{$data_mahasiswa->mahasiswa_id}}" name="mahasiswa_id" hidden>
                    <div class="mb-3">
                        <label for="mahasiswa_nama" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="mahasiswa_nama" name="mahasiswa_nama" value="{{$data_mahasiswa->mahasiswa_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="mahasiswa_nbi" class="form-label">NBI</label>
                        <input type="text" class="form-control" id="mahasiswa_nbi" name="mahasiswa_nbi" value="{{$data_mahasiswa->mahasiswa_nbi}}">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </form>
        </div>
    </div>
@endsection
