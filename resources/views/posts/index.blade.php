<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<title></title>
	</head>
	<body>
		<div class="container">
			<table>
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
					<td><a href="{{route('posts.show',$post->id)}}">Visualizza</a></td>
					<td><a href="{{route('posts.edit',$post->id)}}">Modifica</a></td>
					<td><form action="{{route('posts.destroy', $post->id)}}" method="POST">
	                  @method('DELETE')
	                  @csrf
	                  <button type="submit">Elimina</button>
	                </form></td>
				</tr>
				@endforeach
			</table>
		</div>
	</body>
</html>
