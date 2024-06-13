@extends('layout.main_layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                <h4>Tambah Data Teater</h4>
                <div class="d-flex flex-wrap align-items-center">
                    <a type="button" href="{{ route('teater') }}" class="btn btn-sm btn-warning">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr class="divider">

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ url('teater/api_tambah/') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="teater_nama" class="form-label">Nama Teater</label>
                    <input type="text" class="form-control" id="teater_nama" name="teater_nama">
                </div>
                <div class="mb-3">
                    <label for="teater_judul" class="form-label">Judul Teater</label>
                    <input type="text" class="form-control" id="teater_judul" name="teater_judul">
                </div>
                <div class="mb-3">
                    <label for="teater_foto_path" class="form-label">Foto Teater</label>
                    <input type="file" class="form-control" id="teater_foto_path" name="teater_foto_path" accept="image/*" onchange="previewImage(event)">
                </div>
                <div class="mb-3">
                    <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100%; display: none;">
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function() {
                const imgElement = document.getElementById('imagePreview');
                imgElement.src = reader.result;
                imgElement.style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection
