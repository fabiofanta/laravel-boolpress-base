<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<title>Document</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<form action="{{route('posts.store')}}" method="post">
						@csrf
						@method('POST')
						<div class="form-group">
							<div class="">
								<label for="title">Titolo</label>
								<input class="form-control" type="text" name="title" value="">
							</div>
							<div class="">
								<label for="body">Testo</label>
								<textarea  class="form-control" name="body"> </textarea>
							</div>
							<div class="">
								<label for="author">Autore</label>
								<input  class="form-control" type="text" name="author" value="">
							</div>
							<div class="">
								<label for="location">Location</label>
								<input  class="form-control" type="text" name="location" value="">
							</div>
							<div class="">
								<label for="img">Immagine</label>
								<input class="form-control" type="text" name="img" value="">
							</div>
							<div class="">
								<label for="not-published">Non Pubblicato</label>
								<input type="radio" id="not-published" name="published" value="0">
								<label for="published">Pubblicato</label>
								<input type="radio" id="published" name="published" value="1">
							</div>
							<input class="btn btn-primary"type="submit" value="Salva">
						</div>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>
