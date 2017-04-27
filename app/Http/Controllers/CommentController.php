<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Comment;

use App\Http\Requests;

class CommentController extends Controller
{
    public function create(){
    $data = request()->all();
    $article_id = array_get($data, "article_id");
    $author = array_get($data, "author");
    $content = array_get($data, "content");
    
    $comment = new Comment();
    $article = Article::find($article_id);
    $comment->article()->associate($article);
    $comment->author = $author;
    $comment->content = $content;
    $comment->save();      
    return redirect(route("article.get", ["id"=> $article_id]));
}
 public function get(){
        $id = request()->route("id");
        if(is_null($id)){                    
            $comments = Comment::all();
            return view('comments', ["comments"=>$comments]);      
            
           }
           $comment = Comment::find($id);
           if(is_null($comment)){
               return redirect(route("comment.get"));
           }
           return view("comment", ["comment"=>$comment]);
 }
}
