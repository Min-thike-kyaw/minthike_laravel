@extends('layout')


@section('content')
  
	<div class="container">
		<h2>Name - {{$recepie-> name}}</h2>
   <li>Ingreidents -  {{$recepie-> ingredients}}</li>
   <li>Category  {{$recepie-> category}}</li>
  <hr>
  	<a href="/recepie/{{$recepie->id}}/edit"><button>edit</button></a>
	

	<form method="POST" action="/recepie/{{$recepie->id}}">
		{{ method_field("DELETE")}}
			{{ csrf_field() }}
			
			<button type="submit" class="btn btn-primary">DELETE</button>
	</form>

	</div>
@endsection