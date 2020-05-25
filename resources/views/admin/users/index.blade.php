@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
							<th class="colspan-3"></th>
						</tr>
					</thead>
					@foreach ($users as $key => $user)
						<tbody>
							<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td><a href="{{route('admin.users.show',$user->id)}}" class="btn btn-primary">Visualizza</a></td>
								<td><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-secondary">Modifica</a></td>
								<td><a
								<td><a href="{{route('admin.users.destroy',$user->id)}}" class="btn btn-danger">Elimina</a></td>
							</tr>
						</tbody>
					@endforeach
				</table>
			</div>
		</div>
	</div>

@endsection
