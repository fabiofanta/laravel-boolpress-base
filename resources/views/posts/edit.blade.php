<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>edit</title>
	</head>
	<body>
		<form action="{{route('posts.update',$post->id)}}" method="POST">
			@csrf
			@method('PUT')
			<div class="">
				<label for="title">Titolo</label>
				<input type="text" name="title" value="{{$post->title}}">
			</div>
			<div class="">
				<label for="body">Testo</label>
				<textarea name="body">{{$post->body}}</textarea>
			</div>
			<div class="">
				<label for="author">Autore</label>
				<input type="text" name="author" value="{{$post->author}}">
			</div>
			<div class="">
				<label for="location">Location</label>
				<input type="text" name="location" value="{{$post->location}}">
			</div>
			<div class="">
				<label for="img">Immagine</label>
				<input type="text" name="img" value="{{$post->img}}">
			</div>
			<div class="">
				<label for="not-published">Non Pubblicato</label>
				<input type="radio" id="not-published" name="published" value="0">
				<label for="published">Pubblicato</label>
				<input type="radio" id="published" name="published" value="1">
			</div>
			<input type="submit" value="Salva">
		</form>

	</body>
</html>
