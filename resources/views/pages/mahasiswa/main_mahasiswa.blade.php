@extends('layout.main_layout')

@section('content')

    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                <h3>Daftar Mahasiswa</h3>
                <div class="d-flex flex-wrap align-items-center">
                    @csrf
                    <div class="btn-group mr-3" role="group">
                        <button id="btnGroupDrop1"  type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ri-printer-cloud-fill"></i>Cetak Data
                            <i class="ri-arrow-down-fill"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="{{ route('mahasiswa.api-cetak-pdf') }}"><i class="ri-file-pdf-fill mr-1"></i>Format PDF</a>
                            <a class="dropdown-item" href="{{ route('mahasiswa.api-cetak-excel') }}"><i class="ri-file-excel-2-fill mr-1"></i>Format Excel</a>
                        </div>
                    </div>
                    <a type="button"  href="{{ route('mahasiswa.tambah') }}" class="btn btn-sm btn-primary"><i class="ri-user-add-fill"></i>Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
    <hr class="divider">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            @include('auth.message')
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NBI</th>
                            {{-- <th>Dibuat Oleh</th>
                            <th>Diperbarui Oleh</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $value)
                        <tr>
                            <td>{{ $value->mahasiswa_nama }}</td>
                            <td>{{ $value->mahasiswa_nbi }}</td>
                            {{-- <td>{{ $value->created_by }}</td>
                            <td>{{ $value->updated_by }}</td> --}}
                            <td>
                                <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#previewModal{{$value->mahasiswa_id}}">Preview</a>
                                {{-- <a href="{{ route('mahasiswa.edit', ['mahasiswa_id' => $value->mahasiswa_id]) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$value->mahasiswa_id}}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('pages.mahasiswa.main_mahasiswa_modal')
@endsection
