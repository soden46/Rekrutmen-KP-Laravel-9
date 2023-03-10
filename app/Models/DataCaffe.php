<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCaffe extends Model
{
    use HasFactory;
    public $table = "laporan_data_caffe";
    protected $fillable = [
        'id_caffe',
        'nama_caffe',
        'alamat_caffe',
        'nama_pelamar',
    ];
}
