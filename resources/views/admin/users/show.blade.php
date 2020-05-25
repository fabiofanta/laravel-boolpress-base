@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>{{$user->name}}</h1>
				<p>{{$user->email}}</h1>
			</div>
		</div>
	</div>

@endsection
