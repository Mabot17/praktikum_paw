@extends('layout.main_layout')

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Table Teater</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Table Teater Detail</h6>
                        <div class="d-flex justify-content-end">
                            {{-- <a href="{{ route('teater.create') }}" class="btn btn-primary">Tambah Teater</a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        @include('auth.message')
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Judul</th>
                                        <th>Gambar</th>
                                        {{-- <th>Dibuat Oleh</th>
                                        <th>Diperbarui Oleh</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teater as $value)
                                    <tr>
                                        <td>{{ $value->teater_nama }}</td>
                                        <td>{{ $value->teater_judul }}</td>
                                        <td><img src="{{ asset($value->teater_gambar) }}" alt="{{ $value->teater_judul }}" width="100"></td>
                                        {{-- <td>{{ $value->created_by }}</td>
                                        <td>{{ $value->updated_by }}</td> --}}
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#previewModal{{$value->teater_id}}">Preview</a>
                                            {{-- <a href="{{ route('teater.edit', ['teater_id' => $value->teater_id]) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$value->teater_id}}">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @foreach($teater as $value)
                <!-- Preview Modal -->
                <div class="modal fade" id="previewModal{{$value->teater_id}}" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel{{$value->teater_id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="previewModalLabel{{$value->teater_id}}">Preview Teater</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Nama: {{ $value->teater_nama }}</p>
                                <p>Judul: {{ $value->teater_judul }}</p>
                                <p>Gambar: <img src="{{ asset($value->teater_gambar) }}" alt="{{ $value->teater_judul }}" width="100"></p>
                                {{-- <p>Dibuat Oleh: {{ $value->created_by }}</p>
                                <p>Diperbarui Oleh: {{ $value->updated_by }}</p> --}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal{{$value->teater_id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$value->teater_id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel{{$value->teater_id}}">Konfirmasi Hapus Teater</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Anda yakin ingin menghapus teater dengan nama: {{ $value->teater_nama }}?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                {{-- <form action="{{ route('teater.softDelete', ['teater_id' => $value->teater_id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
@endsection
