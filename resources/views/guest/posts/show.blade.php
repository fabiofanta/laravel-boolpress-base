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
					<div class="card">
						<img src="{{$post->img}}" class="card-img-top" style="height: 18rem;" alt="">
						<h1 class="card-title">{{$post->title}}</h1>
						<p class="card-text">{{$post->body}}</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
