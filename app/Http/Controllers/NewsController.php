<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::all()->paginate(4);

        return view('site.news', ['news' => $news]);
    }
}
