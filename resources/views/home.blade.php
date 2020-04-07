@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

          			          	<div class="container">
									<h2>Home Page</h2>
									<div>
										<a href="/recepie/create"><button class="btn btn-success">Create</button></a>
									</div>

	    						@foreach($data as $value)
	    							<a href="/recepie/{{ $value->id }}"><li>Name - {{ $value->name }}</li></a>
	    								<!-- <li>Ingredients - {{ $value->ingredients }}</li>
	    							<li>Category - {{ $value->category }}</li> -->
	    						<hr>
	   							 @endforeach
								</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
