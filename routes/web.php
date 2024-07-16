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



/*Route::get('/search/{name}/{caste}/{age}/{class}',function($name,$caste,$age,$class){
    echo $name;
    echo "<br>";
    echo $caste;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $class;
});

Route::get('/sum/{a}/{b}',function($a,$b){
    $sum=$a+$b;
    echo $sum;

});*/

Route::get('/dipak', function() {
    return view('xyz');
})->name('Google');