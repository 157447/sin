<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function create(){
    $data = request()->all;
    $category_id = array_get($data, "category_id");
    $title = array_get($data, "title");
    $content = array_get($data, "content");
    
    $article = new Article();
    $article->title = $title;
    $content->content = $content;
    
    $article->save();
    return redirect(route("article.get"));
}
}
