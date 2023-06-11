<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HRD extends Model
{
    use HasFactory;
    public $table = "hrd";
    protected $fillable = [
        'id_hrd',
        'id_user',
        'nama_hrd',
        'created_at',
        'updated_at',
    ];
}
