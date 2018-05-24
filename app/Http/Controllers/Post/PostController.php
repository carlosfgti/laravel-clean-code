<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\Post\StorePostFormRequest;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }


    public function index()
    {
        $posts = $this->post->paginate();

    	return view('posts.index', compact('posts'));
    }


    public function store(StorePostFormRequest $request)
    {
    	$this->post->create($request->all());

    	return redirect()
    				->with('success', 'Sucesso ao Cadastrar!!!')
    				->route('posts.index');
    }
}
