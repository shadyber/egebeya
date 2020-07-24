<?php

use App\Item;
use App\ItemCategory;
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

Auth::routes();
Route::get('/', function () {
       return view('welcome');
});


if(isset($_SESSION['menu'])){
    Route::get('/', function () {
        $items=Item::all();
        $categories=ItemCategory::all();
        return view('welcome')->with(['categories'=>$categories,'items'=>$items]);
    });

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/item','itemController');

    Route::resource('/cat','ItemCategoryController');

}else{

    Route::get('/', function () {
        $items=Item::all();
        $categories=ItemCategory::all();
        return view('welcome')->with(['categories'=>$categories,'items'=>$items]);
    });

    $_SESSION['menu']=App\ItemCategory::all();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/item','itemController');
Route::resource('/cat','ItemCategoryController');
}

