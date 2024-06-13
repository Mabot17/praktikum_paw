@extends('layout.main_layout')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Table Mahasiswa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Mahasiswa Detail</h6>
            <div class="d-flex justify-content-end">
                {{-- <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a> --}}
            </div>
        </div>
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
