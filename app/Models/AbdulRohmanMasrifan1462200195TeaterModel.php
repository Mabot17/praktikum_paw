<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbdulRohmanMasrifan1462200195TeaterModel extends Model
{
    use HasFactory;

    protected $table = 'teater'; // Nama tabel dalam database

    protected $primaryKey = 'teater_id'; // Primary key tabel

    public $timestamps = false; // Aktifkan timestamps

    protected $fillable = [
        'teater_nama',
        'teater_judul',
        'teater_foto_path',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'is_deleted' => 'boolean'
    ];

    // Method to soft delete a teater by its ID
    static public function softDeleteTeater($teater_id)
    {
        // Mengambil data teater berdasarkan ID
        $teater = self::find($teater_id);

        // Jika teater ditemukan, set is_deleted menjadi true
        if ($teater) {
            $teater->is_deleted = true;
            $teater->save();
            return true;
        }

        // Jika teater tidak ditemukan, return false
        return false;
    }
}
