<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
    public function create(){

    	//return of the contact function 
    	return view('contacts.create');
    }


public function store(Request $request){

	$contact = new Contact;
	$contact->email = $request->email;
	$contact->subject = $request->subject;
	$contact->message = $request->message;

	$contact->save();
	//successMessage after redirection
	return redirect()->back()->with('message','Contact Successfuly Submitted');
	
}

}
