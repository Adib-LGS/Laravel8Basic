<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {   
        $posts = Post::all();
        //dd($posts);

        return view('pages.articles', compact('posts'));
    }   


    /**
     * Show 1 Post en particulier grace a l'ID du Model Post
     */
    public function show($id)
    {
        
        $posts = Post::findOrFail($id);
        //dd($posts);

        //$post = $posts[$id] ?? 'Il n\'éxiste pas';

        return view('pages.posts',compact('posts'));
    }


    public function create()
    {
        return view('forms.createForm');
    }


    public function store(Request $request)
    {
        //dd($request->title);
        /**$post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();**/

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    }


    public function contact()
    {
        return view('pages.contact');
    }
}
