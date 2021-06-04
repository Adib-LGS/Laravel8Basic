<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {   

        $posts = Post::all();
        //dd($posts);

        $videos = Video::find(1);
        //dd($videos);

        return view('pages.articles', compact('posts', 'videos'));
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

    /**Register comment with Polymorphic Relationship manually without CRUD */
    public function polyRelations()
    {
        $posts = Post::find(3);
        $video = Video::find(1);

        //dd($post);

        $comment = new Comment(['content' => 'Post comment']);
        $comment2 = new Comment(['content' => 'Video comment']);
        $comment3 = new Comment(['content' => 'Seconde Post comment']);

        //Register comm for Video in Comment table DB
        $video->comments()->save($comment2);

        $posts->comments()->saveMany([$comment, $comment3]);

    }
}
