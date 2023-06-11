<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory, Sluggable;
    public $table = "berita";
    protected $fillable = [
        'id_berita',
        'kategori',
        'judul',
        'penempatan',
        'slug',
        'foto',
        'kutipan',
        'isi',
        'status_lowongan'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
    protected  $primaryKey = 'id_berita';
}
