<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        $news = News::paginate(9);
        $mostviewed = DB::table('articles')->orderBy('views', 'desc')->take(5)->get();

        return view('site.news', [
            'news' => $news,
            'mostviewed' => $mostviewed
        ]);
    }

    public function details(Request $request){
        if(isset($request->id)){
            $news = News::where('id', '=', $request->id)->get();
        }
        else {
            $news = DB::table('news')->orderBy('created_at', 'desc')->take(1)->get();
        }

        $mostviewed = DB::table('articles')->orderBy('views', 'desc')->take(5)->get();
        $articles = DB::table('articles')->orderBy('created_at', 'desc')->take(5)->get();

        return view('site.newsdetail', [
            'news' => $news,
            'mostviewed' => $mostviewed,
            'articles' => $articles
        ]);
    }
}
