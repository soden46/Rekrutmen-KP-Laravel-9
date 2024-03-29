<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPelamar extends Model
{
    use HasFactory;
    public $table = "laporan_data_pelamar";
    protected $fillable = [
        'id_lamaran',
        'id_pelamar',
        'nama_pelamar',
        'email',
        'foto',
        'cv',
        'surat_lamaran',
        'created_at'
    ];
}
