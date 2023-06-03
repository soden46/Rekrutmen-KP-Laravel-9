<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganPekerjaan extends Model
{
    use HasFactory;
    public $table = "laporan_lowongan_pekerjaan";
    protected $fillable = [
        'id_lamaran',
        'id_berita',
        'kategori',
        'judul',
        'penempatan',
        'alamat_caffe',
        'status_lowongan',
        'created_at'
    ];
}
