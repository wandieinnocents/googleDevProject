@extends('layouts.app')


@section('title')
Contact
@endsection

@section('content')

<br><br><br>


<section style="margin-left: 400px;">
	



<div class="col-md-6 col-centered">
	
	<!-- code for the form -->
	<form>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" 
		    id="exampleInputEmail1" 
		    aria-describedby="emailHelp" 
		    placeholder="Enter email">

		    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		    
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEail1">Subject</label>
		    <input type="text" class="form-control" 
		     
		    
		    placeholder="Enter Subject">

		    
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Message</label>
		    <textarea type="email" class="form-control" 
		    id="exampleInputEmail1" 
		    aria-describedby="emailHelp" 
		    placeholder="Enter email">
		</textarea>	

		    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		  </div>

		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>



</div>



</section>

<br><br><br><br>




@endsection


