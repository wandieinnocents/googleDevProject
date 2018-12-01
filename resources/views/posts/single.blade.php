@extends('layouts.app')


@section('title')
Contact
@endsection

@section('content')

<br><br><br>
<section style="margin-left: 50px; margin-right: 50px; margin-top: -50px;">

<!-- code for retrieving posts in table here -->

  

<h3><b>TITLE: {{ $singlepost->title }}</b></h2>


<p>BODY: {{ $singlepost->body }}</p>


</section>






@endsection


