<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<title></title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<table class="table">
						<tr>
							<th>Title</th>
							<th>Body</th>
							<th>Author</th>
						</tr>
						@foreach ($posts as $key => $post)
						<tr>
							<td>{{$post->title}}</td>
							<td>{{$post->body}}</td>
							<td>{{$post->author}}</td>
							<td><a href="{{route('guest.posts.show',$post->id)}}" class="btn btn-primary">Visualizza</a></td>
							<td><a href="{{route('guest.posts.edit',$post->id)}}" class="btn btn-secondary">Modifica</a></td>
							<td><form action="{{route('guest.posts.destroy', $post->id)}}" method="POST">
			                  @method('DELETE')
			                  @csrf
			                  <button type="submit" class="btn btn-danger">Elimina</button>
			                </form></td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
