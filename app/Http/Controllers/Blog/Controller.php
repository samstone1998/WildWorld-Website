<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function bloghome(){
	$data = \DB::table('blog_posts')->get();
	return view("blog.blog_home",["posts" => $data]);
    }

    public function blogpost($post_id){
	$post = \DB::table('blog_posts')->where('id', '=', $post_id)->first();
  if(!$post){
    return redirect('/blog');
  }
  else {

    \DB::table('blog_posts')->where('id', '=', $post_id)->increment('views');
    return view("blog.blog_post",["post_data" => $post]);
  }
    }

}
