<?php

namespace App\Http\Controllers;

use App\Models\Models\PostModel;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
	public function index(PostModel $post)
	{
		return view('posts/index')->with (['posts' => $post->getPaginateByLimit()]);
		//blade内で使う変数'posts'と設定,postの中身にgetを使い、インスタンス化した$postを代入
	} 
	
	public function show(PostModel $post)
	{
		return view('posts/show')->with (['post' => $post]);
	}
	public function create()
	{
		return view('posts/create');
	}
	public function store(PostRequest $request, PostModel $post)
	{
		$input = $request['post'];
		$post->fill($input)->save();
		return redirect('/posts/' . $post->id);
	}
	public function edit(PostModel $post)
	{
		return view('posts/edit')->with (['post' => $post]);
	}
	public function update(PostRequest $request, PostModel $post)
	{
		$input_post = $request['post'];
		$post->fill($input_post)->save();
		return redirect('/posts/' . $post->id);
	}
	public function delete (PostModel $post)
	{
		$post -> delete();
		return redirect('/');
	}
}
