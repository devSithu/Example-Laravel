<?php

use App\Post;

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



Route::get('/insert',function(){
    DB:: insert('insert into post(name,body)value(?,?)',['sithu','this is testing']);
});

Route::get('/read',function(){
    $result=DB::read('select * from post');
    $var='';
    foreach($result as $res){
        $var.=$res->name.'<br>'.$res->body;
    }
    return $var;
});

//Select
Route::get('getAll',function(){
    $post=Post::all();
    return $post;
});

//Find
Route::get('find',function(){
    $post=Post::find(2);
    return $post;
});

//Insert
Route::get('/insert',function(){
    $post=new Post;
    $post->name="Thandar";
    $post->body="Japanese Class";
    $post->save();
});

//Update
Route::get('/update',function(){
    $post=Post::find('1');
    $post->name='Thandar';
    $post->body='This is the update data';
    $post->save();
});

//Insert
Route::get('/create',function(){
   Post::create(['name'=>'tun tun','body'=>'this is testing']);
});


//delete
Route::get('/delete',function(){
    $post=Post::find('1');
    $post->delete();
});

//session
Route::get('/getHome','SessionController@index');
Route::get('/setSingle','SessionController@setSingle');
Route::get('/getSingle','SessionController@getSingle');


//project
Route::get('/','pageController@index');


//create
Route::get('/product/create','ProductController@create');
Route::post('/product/create','ProductController@store');

Route::get('products','pageController@index');

Route::get('products/{id}/add-chart','pageController@add');
