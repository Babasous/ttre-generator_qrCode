<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(){

        $articles = Article::all();  //dd($articles);

        return view('affichage.articles', compact('articles'));

    }
}
