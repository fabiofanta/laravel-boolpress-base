@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form class="form-group" action="{{route('admin.users.update',$user->id)}}" method="post">
					@method('PATCH')
					@csrf
					<label for="name">Name</label>
					<input class="form-control" type="text" name="name" id="name" value="{{$user->name}}">
					<label for="email">Email address</label>
					<input class="form-control" type="email" name="email" id=email value="{{$user->email}}">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" id="password" value="">
					<button type="submit" class="btn btn-primary">Submit</button>

				</form>
			</div>
		</div>
	</div>
@endsection
