<?php
/**
 * Created by IntelliJ IDEA.
 * User: smartankur4u
 * Date: 10/11/17
 * Time: 8:11 AM
 */



namespace App\Http\Controllers;

use App\url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class URLController extends Controller{

//posting the ur to be shorten
//    public function postShorten(Request $request){
//
//        $url=url::Create([
//            'url'=>$request->url,
//            'short_url'=>str_random(6)
//        ]);
//        $with=[
//            'url'=>$url
//        ];
//        return view('success')->with($with);
//
////        return back()->with($with);
//
//
//
//    }


    //posting the ur to be shorten ajax
    public function postShorten(Request $request){

        $url=url::Create([
            'url'=>$request['url'],
            'short_url'=>str_random(6)
        ]);
        $with=[
            'url'=>$url
        ];

        return response()->json(['sweet-url'=> url($url->short_url)] , 200);

    }



//    expand the shorten url

    public function getURL($code){
        $url=url::where('short_url', $code)->first();
        return redirect($url->url);


    }







}
