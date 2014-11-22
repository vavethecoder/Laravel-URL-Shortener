<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', 'HomeController@home');

Route::get('/{code}', 'HomeController@get');

Route::post('/create', function() {
    $url = Input::get('url');
    if (Request::ajax() && $url != null) {
        $urlExist = DB::table('url')->where('url', $url)->first();
        if (empty($urlExist->code)) {
            $code = strtolower(substr(str_shuffle(sha1(uniqid($url, true))), 0, 5));
            $id = DB::table('url')->insert(
                    array('url' => $url, 'code' => $code)
            );
        } else {
            $code = $urlExist->code;
        }
        $url = url() . '/' . $code;
        return Response::json($url);
    }
});
