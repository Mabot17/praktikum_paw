<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbdulRohmanMasrifan1462200195HomeModel extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // Nama tabel dalam database

    protected $primaryKey = 'mahasiswa_id'; // Primary key tabel

    public $timestamps = false; // Aktifkan timestamps

    protected $fillable = [
        'mahasiswa_nama',
        'mahasiswa_nbi',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

}
