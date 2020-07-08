<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticleController extends Controller

{
    public function index(){
    	$article = Article::with('category')->get();
    	// dd($article);
    	return view('admin/article', ['article' => $article]);
    }
}
