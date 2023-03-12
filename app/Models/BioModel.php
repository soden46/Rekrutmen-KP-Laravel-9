<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioModel extends Model
{
    use HasFactory;
    public $table = "biodata_pelamar";
    protected $guarded =['id_biodata'];
}
