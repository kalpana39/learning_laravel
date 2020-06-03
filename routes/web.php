<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/hi', function () {
    return view('welcome');
});

Route::get('/', function () {
    return ('laravel');
});


Route::get('/t', function () {
    return view('test');
});
*/
Route::get('/t/{id}', function ($id) {
    echo $id;
    return view('test');
});

Route::get('/p/{post}', function () {
 
    return view('post');
});

Route::get('/p/{post}', function ($post) {
 
    return $post;
});
/*
Route::get('/p/{post}', function ($post) {
 
    $person=[
        'name'=>'kalpana',
        'num' => '123'

    ];
    if(! array_key_exists($post, $person)){
        abort('404,sorry, that post was not found');
    }
    return view ('post',[
        'post'=>$person[$post]
    ]);
});
*/
Route::get('/p/{post}','PostsController@show');
// Route::get('/p','PostsController@show');



Route::get('/contact', function () {
 
    return view('contact');
});

Route::get('/about', function () {
 
    return view('about');
});

Route::get('/about', function () {
  //  $a= App\Article::all();
 // $a= App\Article::paginate(2);
 $a= App\Article::latest()->get();
// return $a;
return view('about',[
    'articles'=> $a
]);
});

// Route::get('/article/{id}','ArticleController@show');
Route::get('/article', function () {
  
   $a= App\Article::latest()->get();
  return view('article',[
      'articles'=> $a
  ]);
  });

Route::get('/article/{article}/edit','ArticleController@edit');

Route::get('/client', function () {
 
    return view('client');
});




























