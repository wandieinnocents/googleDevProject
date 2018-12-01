@extends('layouts.app')


@section('title')
Contact
@endsection

@section('content')


<section style="margin-left: 50px; margin-right: 50px; margin-top: -50px;">

<!-- code for retrieving posts in table here -->

<table  class="table table-striped table-hover" style="text-center;margin-right: 20px;">

  <thead style="background-color: black;color:white;">

    <tr>

      <th>#</th>

      <th>Title</th>

      <th>Body</th>

      <th> 

      	view
      	
       </th>

    </tr>

  </thead>

  <tbody>
	@foreach($viewposts as $viewpost)
    <tr>

      <th scope="row">{{ $viewpost->id }}</th>

      <td>{{ $viewpost->title }}</td>

      <td>{{ $viewpost->body }}</td>
	
		<td>

		 <a href="{{ $viewpost->id }}">

		 <button class="btn btn-success">
		 	
      		VIEW

      	</button>
      	</a>

      </td>

    </tr>

@endforeach

    

    
  </tbody>

</table>



</section>






@endsection


