<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ArtikelModel;

class ArticleController extends Controller
{
    public function blank(){
        return view('blank');
    }

    public function index(){
        $article= ArtikelModel::get_all();
        //dd($id);
        return view('article', compact('article'));
    }

    public function detail($id){
        $new_article= ArtikelModel::get($id);
        $article = $new_article[0];
        //dd($article->tag);
        $article->tag = explode(",",$article->tag);
        //dd($article);
        return view('detail', compact('article'));
    }

    public function create(){
        //dd($id);
        return view('createArticle');
    }

    public function store(Request $request){
        
        $slug = str_replace(' ','-',$request->judul);
        $data = $request->all();
        $data["slug"] = $slug;
        //dd($data);
        unset($data['_token']);
        $item = ArtikelModel::save($data);
        //dd($item);Jawaban
        return redirect()->route('article.article');
    }

    public function edit($id){
        $temp_article= ArtikelModel::edit($id);
        
        $article = $temp_article[0];
        //dd($article);
        return view('edit', compact('article'));
    }

    public function update(Request $request){
        
        $slug = str_replace(' ','-',$request->judul);
        $data = $request->all();
        $data["slug"] = $slug;
        //dd($data);
        unset($data['_token']);
        ArtikelModel::update($data);
        //dd($item);Jawaban
        return redirect()->route('article.article');
    }

    public function delete($id){
        //dd($id);
        ArtikelModel::delete($id);
        return redirect()->route('article.article');
    }
}
