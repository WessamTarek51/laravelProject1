<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    function index(){
        $posts=[
            ["id"=>1,
            "name"=>"wessam",
            "body"=>"wessam hi",
            "title"=>"hellllllo wessam"],
            ["id"=>2,
            "name"=>"tarek",
            "body"=>"tarek hi",
            "title"=>"hellllllo tarek"],
            ["id"=>3,
            "name"=>"mohamed",
            "body"=>"mohamed hi",
            "title"=>"hellllllo mohamed"]
            ];
            return view("posts.index",["posts"=>$posts]);
    }

    function show($id){
        $posts=["id"=>$id,
        "name"=>"wessam",
        "body"=>"wessam hi",
        "title"=>"hellllllo wessam"];
         return view('posts.show',$posts);
    }

    function edit($id){
        $posts=["id"=>$id,
        "name"=>"wessam",
        "body"=>"wessam hi",
        "title"=>"hellllllo wessam"];
        return view('posts.edit',$posts);
    }

    function update($id){
        return('updateeee done');
    }

    function create(){
        return view('posts.create');
    }

    function destory($id){
        return('destory donnnne');
    }
}
