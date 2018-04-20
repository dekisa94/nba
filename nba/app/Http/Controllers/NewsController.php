<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::with('user')->paginate(10);

        return view('news.newsIndex', compact('news'));
    }
    public function show($id)
    {
        $oneNew= News::with('user')->find($id);

        return view('news.show', compact('oneNew'));
    }
}
