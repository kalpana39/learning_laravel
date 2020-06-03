<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\Article;


class PostsController extends Controller
{
    public function show($slug){

        $post =Post::where('slug',$slug)->firstOrfail();




     //   $post= DB::table('posts')->where('slug', $slug)->first();
      //  dd($post);

     /*   if(! $post){
            abort('404');
        }*/
       // return 'ka';

     /*  $person=[
        'name'=>'kalpana',
        'num' => '123'

    ];
    if(! array_key_exists($slug, $post)){
        abort('404,sorry, that post was not found');
    } 
    return view ('post',[
        'post'=>$post[$slug]
    ]);
    */

    return view('post',[
        'post'=>$post
    ]);
    }









}
