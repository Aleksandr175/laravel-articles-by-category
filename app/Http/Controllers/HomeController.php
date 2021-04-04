<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;

class HomeController extends Controller
{
    public function index($categoryId = 0) {
        $categories = Category::get();

        if ($categoryId) {
            $lastArticles = Article::where('category_id', $categoryId);
        } else {
            $lastArticles = Article::latest();
        }

        return view('home', [
            'articles' => $lastArticles->paginate(6),
            'categories' => $categories,
            'categoryId' => $categoryId
        ]);
    }
}
