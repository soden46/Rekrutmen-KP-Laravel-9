<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    public $table = "lamaran";
    protected $fillable = [
        'id',
        'nama',
        'email',
        'nama_caffe',
        'alamat_caffe',
        'foto',
        'cv',
        'surat_lamaran'
    ];
}
