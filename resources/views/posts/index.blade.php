<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
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
				<td><a href="#">Visualizza</a></td>
				<td><a href="#">Modifica</a></td>
				<td><a href="#">Elimina</a></td>
			</tr>
			@endforeach
		</table>

	</body>
</html>
