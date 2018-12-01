<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
	public function create(){

	return view('posts.create');
}

public function store(Request $request){


	//saving our posts data to the database
	$post = new Post;
  	//$post->title = $request->title;
	
	$post->title = $request->title;
	$post->body = $request->body;

  

	$post->save();
	return redirect()->back()->with('message', 'Post Created Successfully');
	return view('posts.create');
}

public function viewposts(){


	$viewposts = Post::all();


	//return view viewposts created, and store data in a variable viewposts(2)

	return view('posts.viewposts',compact('viewposts'));

}

public function show($id){
 
  $singlepost = Post::findOrFail($id);

  return view('posts.single',compact('singlepost'));

}



}
