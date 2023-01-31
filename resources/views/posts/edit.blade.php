<!DOCTYPE html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<title>Blog</title>
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	</head>
	<body>
	    <h1>BlogName</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title<h2>
                    <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div> 
            <div class="body">
                <h2>Body</h2>
                    <textarea name="post[body]" placeholder="本文" >{{ $post->body }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
		<div class="footer">
			<a href="/">戻る</a>
		</div>

	</body>
</html>