<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;

class PostController extends Controller
{
    function index(){

        $posts = Post::paginate(2);
        return view('posts.index', ["posts" => $posts]) ;

    }

    function create(){
        return view('posts.create') ;
        
    }
    function show($id){
        $post = Post::where('id', $id)->first();        ;
        return view('posts.show' , ['id' => $id] ) ;
        
    }
    function store(Request $request){
        

        $title = $request->input('title') ;
        $body = $request->input('body') ;
        
        Post::create([
            'title' => $title ,
            'body' => $body,
            ]
        );
    
        return redirect()->route('posts.index'); 
        
    }
    function restore(Request $request){
        
        Post::onlyTrashed()-> restore();

        return redirect()->route('posts.index' ); 
        
    }

    function edit($id){
        $post = Post::where('id', $id)->first();
        return view('posts.edit' , ["post" => $post ]) ;
        
    }
    function update(Request $request , $id){
        
        $post = Post::where('id', $id)->first() ; 
        
        $post->update(
            $request->only([
                'name' , 'email'
            ]) 
        );
        //save
    
        return redirect()->route("posts.index") ;
        
    }
    function destroy($id){
        
    Post::where('id', $id)->delete();

    return redirect()->route("posts.index") ;

    }

}
