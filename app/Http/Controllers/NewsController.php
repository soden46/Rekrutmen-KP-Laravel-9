<?php

namespace App\Http\Controllers;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::get();
        return view('home.newsgroup',compact('news'));
    }    
    
    public function detail($judul)
    {
        $news = News::where('judul',$judul)->get();
        return view('home.news',compact('news'));
    }
}
