<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caffe extends Model
{
    public $table = "caffe";
    protected $fillable = [
        'id_caffe',
        'id_hrd',
        'group_caffe',
        'nama_caffe',
        'provinsi',
        'alamat_caffe',
        'jumlah_pegawai'
    ];
    protected $primaryKey = 'id_caffe';
    public $timestamps = false;
}
