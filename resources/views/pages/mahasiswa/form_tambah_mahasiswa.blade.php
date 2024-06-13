
@extends('layout.main_layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                <h4>Tambah Data Mahasiswa</h4>
                <div class="d-flex flex-wrap align-items-center">
                    <a type="button"  href="{{ route('mahasiswa') }}" class="btn btn-sm btn-warning"><i class="ri-user-add-fill"></i>Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <hr class="divider">

    <div class="card">
        <div class="card-body">
                <form method="POST" action="{{ url('mahasiswa/api_tambah/') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="mahasiswa_nama" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="mahasiswa_nama" name="mahasiswa_nama">
                    </div>
                    <div class="mb-3">
                        <label for="mahasiswa_nbi" class="form-label">NBI</label>
                        <input type="text" class="form-control" id="mahasiswa_nbi" name="mahasiswa_nbi">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </form>
        </div>
    </div>
@endsection
