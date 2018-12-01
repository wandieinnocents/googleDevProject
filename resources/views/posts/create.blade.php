@extends('layouts.app')


@section('title')
Posts
@endsection

@section('content')

<br><br><br>

<!-- return of success message here  -->

<section style="margin-left: 400px;">
	





<div class="col-md-6 col-centered">
	
	<!-- code for the form -->
	<center>
	@if(session()->has('message'))
    <div class="alert alert-success" style="width: 400px;" >
        {{ session()->get('message') }}
    </div>
		@endif
		</center>
	<form method="POST" action="{{ url('posts') }}">
		{{ csrf_field() }}

		  <div class="form-group">
		    <label>Title</label>
		    <input type="text" " id="title" class="form-control" name="title" placeholder="Enter title here">

		    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		    
		  </div>

		 
		  <div class="form-group">
		    <label">Body</label>
		    <textarea type="text" class="form-control"  id="body" name="body" placeholder="Enter body">
		</textarea>	

		    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		  </div>

		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  
		</form>



</div>



</section>

<br><br><br><br>




@endsection


