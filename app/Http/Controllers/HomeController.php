<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;

class HomeController extends Controller
{
    public function index($categoryId = 0) {
        $lastArticles = Article::latest();
        $categories = Category::get();

        if ($categoryId) {
            $lastArticles->where('category_id', $categoryId);
        }

        return view('home', [
            'articles' => $lastArticles->get(),
            'categories' => $categories,
            'categoryId' => $categoryId
        ]);
    }
}
