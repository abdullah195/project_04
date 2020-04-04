<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Post;


class postscontroller
{
public function show($post){

    $posts=Post::where('slug',$post)->first();

    //$posts=DB::table('posts')->where('slug',$post)->first();

   if(!$posts){
       abort(404);
   }



    return view('test',[ 'name'=>$posts]);




}


}
