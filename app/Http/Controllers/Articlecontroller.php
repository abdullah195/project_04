<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class Articlecontroller extends Controller
{

   public function create(){
        return view('Article.create');
    }


    public function store(){


        $Article=new Article();
        $Article::create(request()->validate([
              'title'=>['required'],
              'body'=>['required'],
          ]));



        return redirect('article/create');
    }


   public function show(){

       $Articles=Article::get();
       return view('Article.show',compact('Articles'));


    }

    public function edit($id){
       $article=Article::find($id);
       return view('Article.edit',compact('article'));

   }

   public function update($id){

       $Article=Article::find($id);
       $Article->title=request('title');
       $Article->body=request('body');
       $Article->save();
       return redirect('article/'.$Article->id);


   }

}
