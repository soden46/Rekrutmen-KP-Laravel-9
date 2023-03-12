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
        'kategori',
        'judul',
        'slug',
        'foto',
        'kutipan',
        'isi',
        'published_at'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
    protected $primaryKey = 'id_news';
}
