<?php

use Illuminate\Http\Request;
use App\Category;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route:: get('cat', function(){
    return Category::all();
});

//Route::post('cat', 'Api/CategoryController@post');

//Route::post('cat', function (Request $req){
//
//    $cat = new Category();
//    $cat->name = $req->name;
//    $cat->save();
//
//    return 'created';
//});
//
//Route::put('cat/{id}', function (Request $req, $id){
//
//    $cat = Category::find($id);
//    $cat->name = $req->name;
//    $cat->save();
//
//    return'updated';
//});
//
//Route::delete('cat/{id}', function(Request $req, $id){
//
//    $cat = Category::find($id)->delete();
//
//    return 'deleted';
//});
