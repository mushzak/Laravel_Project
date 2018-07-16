<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function create(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $post = new Post();
        $post->fill($data);
        $post->save();
        return redirect('posts');
    }

    public function posts()
    {
        $posts = Post::latest()->paginate(20);
        return view('post.posts',compact('posts'));
    }

    public function post(Post $post)
    {
        return view('post.post',compact('post'));
    }

    public function createComment(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $comment = new Comments();
        $comment->fill($data);
        $comment->save();
        return redirect('post/'.$data['post_id']);
    }

}
