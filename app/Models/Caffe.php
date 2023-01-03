<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caffe extends Model
{
    public $table = "caffe";
    protected $fillable = [
        'id_caffe',
        'nama_caffe',
        'alamat_caffe'
    ];
}
