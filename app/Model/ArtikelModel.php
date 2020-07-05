<?php

namespace App\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel{
    public static function get_all(){
        $article = DB::table('article')->get();
        return $article;
    }

    public static function get($id){
        $article = DB::table('article')->where('article.id', '=',$id)->join('user', 'article.writer', '=', 'user.iduser')->get();
        return $article;
    }

    public static function save($data){
        //dd($data['judul']);
        $new_article = DB::table('article')->insert([
            'judul' => $data['judul'],
            'isi' => $data['isi'],
            'slug' => $data['slug'],
            'tag' => $data['tag'],
            'writer' => $data['writer']
        ]);
        return $new_article;
    }

    public static function edit($id){
        $article = DB::table('article')->where('article.id', '=',$id)->get();
        return $article;
    }

    public static function update($data){
        //dd($data);
        DB::table('article')->where('article.id', '=', $data['id'])->update([
            'judul' => $data['judul'],
            'isi' => $data['isi'],
            'slug' => $data['slug'],
            'tag' => $data['tag']
        ]);
        
    }

    public static function delete($id){
        DB::table('article')->where('article.id', '=',$id)->delete();
    }

}