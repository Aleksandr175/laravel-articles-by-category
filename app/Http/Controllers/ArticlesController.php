<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($slug) {
        $article = Article::where('slug', $slug)->first();

        if (!$article) {
            return abort(404);
        }

        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function edit(Article $article) {
        $this->authorize('update', $article);

        return view('articles.edit', [
            'article' => $article
        ]);
    }
}
