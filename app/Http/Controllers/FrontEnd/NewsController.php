<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::latest()->get();
        return view('frontend.news.index', compact('news'));
    }

    public function show(News $news)
    {
        return view('frontend.news.show', compact('news'));
    }
}
