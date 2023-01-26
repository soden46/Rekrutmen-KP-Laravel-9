<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    public $table = "lamaran";
    protected $fillable = [
        'id_lamaran',
        'id_pelamar',
        'nama_caffe',
        'alamat_caffe',
        'foto',
        'surat_lamaran',
        'cv',
        'status_lamaran'
    ];
    protected $primaryKey = 'id_lamaran';
    public $timestamps = false;
}
