<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;

class CategoryController extends Controller
{
    public function get(){
        $categories = Category::all();
        return view('categories', ["categories"=>$categories]);      
            
           }
}



