<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
      $recent_posts = \DB::table('blog_posts')->orderBy('id','desc')->take(3)->get();
      return view('index',['blog_posts'=>$recent_posts]);
    }

    public function product(){
      return view('product');
    }

}
