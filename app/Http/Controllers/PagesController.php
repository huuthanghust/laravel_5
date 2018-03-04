<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Input;


class PagesController extends Controller
{
    public function index()
    {
        return redirect('/articles');
    }
    public function show($id)
    {
        $article = Article::find($id);
         return view('articles.show', compact('article'));
    }
    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        dd(Input::get('title'));
    }
   
}
