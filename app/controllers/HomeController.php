<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function home() {
        return View::make('home');
    }

    public function get($code) {
        $urlExist = DB::table('url')->where('code', $code)->first();
        if (empty($urlExist)) {
            return View::make('get')->with('urlExist', $urlExist);
        }
        return Redirect::to($urlExist->url);
    }

}
