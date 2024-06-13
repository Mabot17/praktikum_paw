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
                    <!-- Isi konten preview di sini -->
                    <p>Nama: {{ $value->teater_nama }}</p>
                    <p>NBI: {{ $value->teater_judul }}</p>
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
                    <!-- Isi pesan konfirmasi di sini -->
                    <p>Anda yakin ingin menghapus teater dengan nama: {{ $value->teater_nama }}?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="{{ route('teater.api_hapus', ['mhs_id' => $value->teater_id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE') {{-- Pastikan untuk menambahkan metode DELETE --}}
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i> Ya, Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
