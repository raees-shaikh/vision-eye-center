<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Wink\WinkTag;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC');
        // ->simplePaginate(12);

        $tags = WinkTag::limit(3)->pluck('name')->toArray();

        if (request()->has('tag')) {
            $posts = WinkTag::where('name', request('tag'))->first()->posts()->live()->orderBy('publish_date', 'DESC');
        }

        $posts = $posts->simplePaginate(7);
        $featured = $posts->where('featured_image', '!==', null)->first();

        $recentPosts = WinkPost::select()
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(5)
            ->get();

        return view('blog.index', compact('posts', 'featured', 'tags', 'recentPosts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = WinkPost::with('tags')
            ->live()
            ->whereSlug($slug)
            ->firstOrFail();
        $tags = WinkTag::limit(3)->pluck('name')->toArray();

        $recentPosts = WinkPost::select()
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(5)
            ->get();

        return view('blog.show', compact('post', 'tags', 'recentPosts'));
    }
}
