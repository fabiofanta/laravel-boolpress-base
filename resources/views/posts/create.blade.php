<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Document</title>
	</head>
	<body>
		<form action="{{route('posts.store')}}" method="post">
			@csrf
			@method('POST')
			<div class="">
				<label for="title">Titolo</label>
				<input type="text" name="title" value="">
			</div>
			<div class="">
				<label for="body">Testo</label>
				<textarea name="body"> </textarea>
			</div>
			<div class="">
				<label for="author">Autore</label>
				<input type="text" name="author" value="">
			</div>
			<div class="">
				<label for="location">Location</label>
				<input type="text" name="location" value="">
			</div>
			<div class="">
				<label for="img">Immagine</label>
				<input type="text" name="img" value="">
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
