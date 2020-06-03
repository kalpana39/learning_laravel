<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    
    public function index(){
        $articles= Article::latest()->get();
        return view('index',['articles'=>$articles]);

    }
    public function show($id){
    $articles= Article::find($id);
    return view('show',['articles'=>$article]);
    }
    

}
