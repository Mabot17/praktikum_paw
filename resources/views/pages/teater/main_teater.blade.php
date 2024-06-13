@extends('layout.main_layout')

@section('content')
    @include('pages.teater.alert_teater')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                <h4>Daftar Teater</h4>
                <div class="d-flex flex-wrap align-items-center">
                    @csrf
                    <div class="btn-group mr-3" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-print"></i> Cetak Data
                            <i class="fas fa-arrow-down"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="{{ route('teater.api_cetak_pdf') }}"><i class="fas fa-file-pdf"></i> Format PDF</a>
                            <a class="dropdown-item" href="{{ route('teater.api_cetak_excel') }}"><i class="fas fa-file-excel"></i> Format Excel</a>
                        </div>
                    </div>
                    <a type="button" href="{{ route('teater.tambah') }}" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
    <hr class="divider">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teater as $value)
                        <tr>
                            <td>{{ $value->teater_nama }}</td>
                            <td>{{ $value->teater_judul }}</td>
                            <td>
                                <img src="{{ asset($value->teater_foto_path) }}" alt="Foto Teater" style="width: 100px; height: auto;">
                            </td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#previewModal{{$value->teater_id}}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ url('teater/ubah/'.$value->teater_id) }}" class="btn btn-sm btn-success mr-1" style="text-align: center!important">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$value->teater_id}}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('pages.teater.main_teater_modal')
@endsection
