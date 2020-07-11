<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use LaraDev\Post;

class PostController extends Controller
{

    public function forceDelete($post) {
        Post::onlyTrashed()->where(['id' => $post])->forceDelete();
        return redirect()->route('posts.trashed');
    }

    public function restore($post) {
        $postRestore = Post::onlyTrashed()->where(['id' => $post])->first();

        if ($postRestore->trashed()){
            $postRestore->restore();
        }

        return redirect()->route('posts.trashed');
    }

    public function trashed() {
        $posts = Post::onlyTrashed()->get();

        return view('index', compact('posts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        // $posts = Post::withTrashed()->get();

        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $post = new Post();

        // $post->title = $request->title;
        // $post->slug = str_slug($request->title);
        // $post->subtitle = $request->subtitle;
        // $post->description = $request->description;
        // $post->publish_at = date('Y-m-d H:i:s');

        // $post->save();

        // $post = Post::create([
        //     'title' => 'Title teste 2',
        //     'subtitle' => 'Subtitle teste 2',
        //     'slug' => str_slug('Title teste 2'),
        //     'description' => 'Descrição de teste 2',
        //     'publish_at' => date('Y-m-d H:i:s'),
        // ]);

        // var_dump($post);

        // $post = Post::firstOrNew([
        //     'title' => 'Title teste 3',
        //     'subtitle' => 'Subtitle teste 3',
        //     'slug' => str_slug('Title teste 3'),
        //     'description' => 'Descrição de teste 3',
        //     'publish_at' => date('Y-m-d H:i:s'),
        // ]);

        // $post->save();

        // $post = Post::firstOrCreate([
        //     'title' => 'Title teste 3',
        //     'subtitle' => 'Subtitle teste 3',
        //     'slug' => str_slug('Title teste 3'),
        //     'description' => 'Descrição de teste 3',
        //     'publish_at' => date('Y-m-d H:i:s'),
        // ]);

        // $post->save();

        $post = new Post();

        $post->title = $request->title;
        // $post->slug = str_slug($request->title);
        $post->subtitle = $request->subtitle;
        $post->description = $request->description;
        // $post->publish_at = date('Y-m-d H:i:s');

        $post->save();

        return redirect()->route('posts.index');

        // var_dump($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('create', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        // $post_created = Post::find($post->id);

        // $post_created->title = $request->title;
        // $post_created->subtitle = $request->subtitle;
        // $post_created->description = $request->description;

        // $post_created->save();

        $post_created = Post::updateOrCreate([
            'title' => $request->title
        ], [
            'subtitle' => $request->subtitle,
            'description' => $request->description,
        ]);

        // var_dump($post_created);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // $post = Post::find($post->id)->delete();
        // Post::destroy([2, 3, 5]);
        // Post::where('created_at', '>=', date('Y-m-d H:i:s'))->delete();

        Post::destroy($post->id);

        return redirect()->route('posts.index');
    }
}
