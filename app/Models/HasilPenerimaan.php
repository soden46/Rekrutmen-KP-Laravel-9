<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPenerimaan extends Model
{
    use HasFactory;
    public $table = "laporan_hasil_penerimaan";
    protected $fillable = [
        'id_lamaran',
        'id_pelamar',
        'nama_pelamar',
        'email',
        'foto',
        'cv',
        'surat_lamaran',
        'status_lamaran',
    ];
    public $timestamps = false;
}
