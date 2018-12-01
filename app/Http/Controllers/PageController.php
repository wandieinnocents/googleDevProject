<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    //
//method creation of about page
public function aboutPage(){

	return view('pages.about');
}

//creating gdg posts here
public function postsPage(){
	return view('pages.posts');
}

//creation of contact page here

public function contactPage(){

	return view('pages.contact');

}



}
