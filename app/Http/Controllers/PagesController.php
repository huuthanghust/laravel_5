<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Input;
use App\Http\Requests\ArticleFormRequest;

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

    public function store(ArticleFormRequest $request)
    {
    
        $title = $request -> input('title');
        $content = $request -> input('content');

        Article::create([
            'title'=> $title,
            'content' =>$content
        ]);
        return redirect()->route('article.index');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('articles.edit',compact('article'));
    }
    public function update($id,ArticleFormRequest $request){
        $article = Article::find($id);
        $title = $request -> input('title');
        $content = $request -> input('content');

        $article -> update([
            'title'=> $title,
            'content' =>$content
        ]);
        return redirect()->route('article.index');
    }
    public function delete($id){
        $article = Article::find($id);
        $article -> delete();
        return redirect() -> route('article.index');
    }
}
