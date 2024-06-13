<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AbdulRohmanMasrifan1462200195TeaterModel extends Model
{
    use HasFactory, SoftDeletes;

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
    ];
}
