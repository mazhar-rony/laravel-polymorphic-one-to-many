<?php

namespace App\Http\Controllers;

use App\Post;
use App\Video;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('comments.index', [
            'comments' => Comment::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);

        //return $comment->load('commentable');

        $type = $comment->commentable_type;

        if($type == 'App\Post')
        {
            return redirect('/posts/'.$comment->commentable->id);
        }
        else
        {
            return redirect('/videos/'.$comment->commentable->id);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);

        $comment->delete();

        return back();
    }

    public function videoComment($id)
    {
        $video = Video::find($id);

        $video->comments()->create([
            'comment_body' => request('comment_body')
        ]);

        return back();
    }

    public function postComment($id)
    {
        $post = Post::find($id);

        $post->comments()->create([
            'comment_body' => request('comment_body')
        ]);

        return back();
    }
}
