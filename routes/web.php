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

Route::get('test',function (){
   /* echo "welcome to laravel";
    die();
    echo "welcome to laravel";
    */
    $name ="hadia";
    dd($name);
});

Route::get('users/{id?}',function ($id){
dd($id);
});

Route::get('users/{id}/comments/{comments}',function ($id,$comment){
    dd('comments n'.$comment.' users'.$id);
});


Route::redirect('blog','new_blog',301);
Route::redirect('google','https://www.google.ps',301);


Route::get('new_blog',function (){
    dd('Hi from new_blog');
})->name('my_new_blog');


Route::prefix('admin')-> group(function(){

    Route::get('dashboard',function (){

    });
    Route::get('category',function (){

    });
    Route::get('product',function (){

    });


    Route::prefix('users1')-> group(function(){



        Route::get('reset_pass',function (){

        });

        Route::get('profile1',function (){

        });
    });
});

Route::middleware(['checkip'])->group(function (){
    Route::get('product',function (){

    });

});

Route::middleware('throttle:5,1')->group(function (){
    Route::get('admins',function () {
    });



    });
