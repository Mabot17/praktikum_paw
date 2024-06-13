<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AbdulRohmanMasrifan1462200195MahasiswaModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'mahasiswa_id';
    protected $fillable = [
        'mahasiswa_nbi', 'mahasiswa_nama', 'created_by', 'updated_by', 'deleted_by'
    ];
}
