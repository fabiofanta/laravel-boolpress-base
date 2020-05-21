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
				<label for="text">Testo</label>
				<input type="text" name="text" value="">
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
				<label for="published">Pubblicato</label>
				<input type="text" name="published" value="">
			</div>
		</form>

	</body>
</html>
