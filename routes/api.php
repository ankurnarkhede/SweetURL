<?php

use Illuminate\Http\Request;
use App\url;


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


Route::post('url', function (Request $request){
    //
    $url=url::Create([
        'url'=>$request->url,
        'short_url'=>str_random(6)
    ]);
    return $url;

});
