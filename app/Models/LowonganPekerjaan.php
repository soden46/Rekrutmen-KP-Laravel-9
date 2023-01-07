<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganPekerjaan extends Model
{
    use HasFactory;
    public $table = "laporan_lowongan_pekerjaan";
    protected $fillable = [
        'id_lowongan',
        'nama_jabatan',
        'nama_caffe',
        'alamat_caffe',
    ];
}
