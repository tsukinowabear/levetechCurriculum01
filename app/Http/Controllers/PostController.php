<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\PostModel;

class PostController extends Controller
{
	public function index(PostModel $post)
	{
		return view('posts/index')->with (['posts' => $post->getPaginateByLimit()]);
		//blade内で使う変数'posts'と設定,postの中身にgetを使い、インスタンス化した$postを代入
	} 
	
	public function show(PostModel $post)
	{
		return view('posts/show')->with (['posts' => $post]);
	}
}
