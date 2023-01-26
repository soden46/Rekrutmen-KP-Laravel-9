<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;
    public $table = "pelamar";
    protected $fillable = [
        'id_pelamar',
        'nama_pelamar',
        'email',
    ];
}
