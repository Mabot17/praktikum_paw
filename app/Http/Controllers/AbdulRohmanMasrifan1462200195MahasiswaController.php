<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\AbdulRohmanMasrifan1462200195MahasiswaModel;

class AbdulRohmanMasrifan1462200195MahasiswaController extends Controller
{
    public function formTambah()
    {
        return view('pages.mahasiswa.form_tambah_mahasiswa');
    }

    public function formUbah($mhs_id)
    {
        $data_mahasiswa = AbdulRohmanMasrifan1462200195MahasiswaModel::findOrFail($mhs_id);

        return view('pages.mahasiswa.form_ubah_mahasiswa', compact('data_mahasiswa'));
    }

    public function index()
    {
        // Mengambil data mahasiswa dan mengurutkannya berdasarkan ID terakhir
        // $data = AbdulRohmanMasrifan1462200195MahasiswaModel::select('mahasiswa.*', 'prodi.prodi_id', 'prodi.prodi_nama', 'pembimbing.pembimbing_nama')
        //     ->join('prodi', 'mahasiswa.mhs_prodi_id', '=', 'prodi.prodi_id')
        //     ->join('pembimbing', 'mahasiswa.mhs_pembimbing_id', '=', 'pembimbing.pembimbing_id')
        //     ->whereNull('mahasiswa.deleted_at') // Menambahkan kondisi untuk memastikan deleted_at adalah NULL
        //     ->orderBy('mahasiswa.mhs_id', 'desc')
        //     ->get();

        $mahasiswa  = AbdulRohmanMasrifan1462200195MahasiswaModel::select('mahasiswa.*')
            ->whereNull('mahasiswa.deleted_at') // Menambahkan kondisi untuk memastikan deleted_at adalah NULL
            ->get();

        return view('pages.mahasiswa.main_mahasiswa', compact('mahasiswa'));
    }

    public function tambahData(Request $request)
    {
        // Buat entri baru tanpa validasi
        $mahasiswa = new AbdulRohmanMasrifan1462200195MahasiswaModel();

        // Set nilai-niali properti berdasarkan input form
        $mahasiswa->mahasiswa_nama = $request->mahasiswa_nama;
        $mahasiswa->mahasiswa_nbi = $request->mahasiswa_nbi;

        // Simpan data ke database
        $mahasiswa->save();

        // Set variabel sesi untuk pesan berhasil
        Session::flash('success_insert_mhs', 'Data Mahasiswa Berhasil Disimpan');

        // Kembalikan ke halaman utama atau halaman yang Anda inginkan
        return redirect()->route('mahasiswa');
    }

    public function ubahData(Request $request)
    {

        $updated_mahasiswa = AbdulRohmanMasrifan1462200195MahasiswaModel::findOrFail($request->mahasiswa_id);

        $updated_mahasiswa->mahasiswa_nama = $request->mahasiswa_nama;
        $updated_mahasiswa->mahasiswa_nbi = $request->mahasiswa_nbi;

        $updated_mahasiswa->save();

        // Set variabel sesi untuk pesan berhasil
        Session::flash('success_update_mhs', 'Data Mahasiswa Berhasil Diubah');

        // Kembalikan ke halaman utama atau halaman yang Anda inginkan
        return redirect()->route('mahasiswa');
    }

    public function hapusData($mahasiswa_id)
    {
        $mahasiswa = AbdulRohmanMasrifan1462200195MahasiswaModel::findOrFail($mahasiswa_id);
        $mahasiswa->delete();

        Session::flash('delete_mhs', 'Data Mahasiswa Berhasil Dihapus');
        return redirect()->route('mahasiswa');
    }

    public function cetakDataPDF() {
        $data_mahasiswa = AbdulRohmanMasrifan1462200195MahasiswaModel::select('mahasiswa.*')
            ->whereNull('mahasiswa.deleted_at')
            ->get();

        $filename = 'data-mahasiswa-'.date("Ymd-His").'.pdf';

        $pdf = new Dompdf();
        $pdf->loadHTML(view('pages.mahasiswa.form_cetak_pdf_mahasiswa', compact('data_mahasiswa'))->render());
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        $pdf->stream($filename);
    }

    public function cetakDataExcel()
    {
        // Query untuk mendapatkan data mahasiswa
        $data_mahasiswa = AbdulRohmanMasrifan1462200195MahasiswaModel::select('mahasiswa.*')
            ->whereNull('mahasiswa.deleted_at')
            ->get();

            // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Header kolom
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'NIM');

        // Data mahasiswa
        $row = 2;
        $number = 1;
        foreach ($data_mahasiswa as $mahasiswa) {
            $sheet->setCellValue('A' . $row, $number);
            $sheet->setCellValue('B' . $row, $mahasiswa->mahasiswa_nama);
            $sheet->setCellValue('C' . $row, $mahasiswa->mahasiswa_nbi);
            $row++;
            $number++;
        }

        // Buat writer Xlsx
        $writer = new Xlsx($spreadsheet);

        // Simpan file sementara di penyimpanan sementara
        $tempFilePath = tempnam(sys_get_temp_dir(), 'excel');
        $writer->save($tempFilePath);

        // Atur header respons untuk file Excel
        $headers = [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ];

        // Ambil tanggal saat ini untuk nama file
        $filename = 'data-mahasiswa-'.date("Ymd-His").'.xlsx';

        // Kembalikan respons untuk mendownload file Excel
        return Response::download($tempFilePath, $filename, $headers)->deleteFileAfterSend(true);
    }
}
