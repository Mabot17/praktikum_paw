<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Models\AbdulRohmanMasrifan1462200195TeaterModel;

class AbdulRohmanMasrifan1462200195TeaterController extends Controller
{
    public function formTambah()
    {
        return view('pages.teater.form_tambah_teater');
    }

    public function formUbah($teater_id)
    {
        $data_teater = AbdulRohmanMasrifan1462200195TeaterModel::findOrFail($teater_id);

        return view('pages.teater.form_ubah_teater', compact('data_teater'));
    }

    public function index()
    {
        // Mengambil data teater dan mengurutkannya berdasarkan ID terakhir
        // $data = AbdulRohmanMasrifan1462200195TeaterModel::select('teater.*', 'prodi.prodi_id', 'prodi.prodi_nama', 'pembimbing.pembimbing_nama')
        //     ->join('prodi', 'teater.teater_prodi_id', '=', 'prodi.prodi_id')
        //     ->join('pembimbing', 'teater.teater_pembimbing_id', '=', 'pembimbing.pembimbing_id')
        //     ->whereNull('teater.deleted_at') // Menambahkan kondisi untuk memastikan deleted_at adalah NULL
        //     ->orderBy('teater.teater_id', 'desc')
        //     ->get();

        $teater  = AbdulRohmanMasrifan1462200195TeaterModel::select('teater.*')
            ->whereNull('teater.deleted_at') // Menambahkan kondisi untuk memastikan deleted_at adalah NULL
            ->get();

        return view('pages.teater.main_teater', compact('teater'));
    }

    public function tambahData(Request $request)
    {
        // Buat entri baru tanpa validasi
        $teater = new AbdulRohmanMasrifan1462200195TeaterModel();

        // Set nilai-niali properti berdasarkan input form
        $teater->teater_nama = $request->teater_nama;
        $teater->teater_judul = $request->teater_judul;

        if ($request->hasFile('teater_foto_path')) {
            // Ambil nama file gambar
            $image = $request->file('teater_foto_path');
            $imageName = $image->getClientOriginalName();

            // Buat direktori jika belum ada
            $directory = public_path('uploads/teater/'.$request->teater_nama);
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            // Pindahkan gambar ke direktori yang baru dibuat
            $image->move($directory, $imageName);
            $teater->teater_foto_path = 'uploads/teater/'.$request->teater_nama.'/'.$imageName; // Simpan path gambar ke database
        }

        // Simpan data ke database
        $teater->save();

        // Set variabel sesi untuk pesan berhasil
        Session::flash('success_insert_teater', 'Data Teater Berhasil Disimpan');

        // Kembalikan ke halaman utama atau halaman yang Anda inginkan
        return redirect()->route('teater');
    }

    public function ubahData(Request $request)
    {

        $updated_teater = AbdulRohmanMasrifan1462200195TeaterModel::findOrFail($request->teater_id);

        $updated_teater->teater_nama = $request->teater_nama;
        $updated_teater->teater_judul = $request->teater_judul;

        if ($request->hasFile('teater_foto_path')) {
            // Ambil nama file gambar
            $image = $request->file('teater_foto_path');
            $imageName = $image->getClientOriginalName();

            // Buat direktori jika belum ada
            $directory = public_path('uploads/teater/'.$request->teater_nama);
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            // Pindahkan gambar ke direktori yang baru dibuat
            $image->move($directory, $imageName);
            $updated_teater->teater_foto_path = 'uploads/teater/'.$request->teater_nama.'/'.$imageName; // Simpan path gambar ke database
        }

        $updated_teater->save();

        // Set variabel sesi untuk pesan berhasil
        Session::flash('success_update_teater', 'Data Teater Berhasil Diubah');

        // Kembalikan ke halaman utama atau halaman yang Anda inginkan
        return redirect()->route('teater');
    }

    public function hapusData($teater_id)
    {
        $teater = AbdulRohmanMasrifan1462200195TeaterModel::findOrFail($teater_id);
        $teater->delete();

        Session::flash('delete_teater', 'Data Teater Berhasil Dihapus');
        return redirect()->route('teater');
    }

    public function cetakDataPDF() {
        $data_teater = AbdulRohmanMasrifan1462200195TeaterModel::select('teater.*')
            ->whereNull('teater.deleted_at')
            ->get();

        $filename = 'data-teater-'.date("Ymd-His").'.pdf';

        $pdf = new Dompdf();
        $pdf->loadHTML(view('pages.teater.form_cetak_pdf_teater', compact('data_teater'))->render());
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        $pdf->stream($filename);
    }

    public function cetakDataExcel()
    {
        // Query untuk mendapatkan data teater
        $data_teater = AbdulRohmanMasrifan1462200195TeaterModel::select('teater.*')
            ->whereNull('teater.deleted_at')
            ->get();

            // Buat objek Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Header kolom
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'NIM');

        // Data teater
        $row = 2;
        $number = 1;
        foreach ($data_teater as $teater) {
            $sheet->setCellValue('A' . $row, $number);
            $sheet->setCellValue('B' . $row, $teater->teater_nama);
            $sheet->setCellValue('C' . $row, $teater->teater_judul);
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
        $filename = 'data-teater-'.date("Ymd-His").'.xlsx';

        // Kembalikan respons untuk mendownload file Excel
        return Response::download($tempFilePath, $filename, $headers)->deleteFileAfterSend(true);
    }
}
