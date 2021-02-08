<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {

        return view('articles.show', compact('article'));
    }

    public function index()
    {
        return view('articles.index', [
            'articles' => Article::latest()->simplePaginate(2)
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Article $article)
    {

        Article::create($this->validateArticle());

        return redirect(route('articles.index'), $article);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {

        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
