<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posts;
use FontLib\Table\Type\post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postsByUser(Request $request)
    {
        $posts = Posts::where('user_id', 3);

        return response()->json([
            "title" => $posts->title,
            //"body" => $posts->body,
        ], 200);
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
     * @return Posts
     */
    public function store(Request $request)
    {
        //
        $newPost = new Posts;
        $newPost ->user_id = 1;
        $newPost -> title = $request -> posts["title"];
        $newPost -> body = $request -> posts["body"];
        $newPost->save();

        return $newPost;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => "Not Found"], 404);
        }

        if ($post->user_id != $request->user()->id) {
            return response()->json(["message" => "Forbidden"], 403);
        }

        return response()->json($post);
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
        //
    }
}
