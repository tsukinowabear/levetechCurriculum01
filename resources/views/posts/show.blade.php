<!DOCTYPE html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<title>Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	</head>
	<body>
		<h1 class="title">
			{{ $posts->title }}
		</h1>
		<div class="content">
				<div class="content_post">
					<h3>本文</h3>
					<p class='body'>{{ $posts->body }}</p>
				</div>
		</div>
		<div class="footer">
			<a href="/">戻る</a>
		</div>

	</body>
</html>