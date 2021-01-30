<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;

class HomeController extends Controller
{
    public function index() {
        $lastArticles = Article::latest()->take(6)->get();
        $categories = Category::get();

        return view('home', [
            'articles' => $lastArticles,
            'categories' => $categories
        ]);
    }
}
