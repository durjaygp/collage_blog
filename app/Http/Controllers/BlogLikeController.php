<?php

namespace App\Http\Controllers;

use App\Models\BlogLike;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BlogLikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $like = new BlogLike();
        $like->blog_id = $request->blog_id;
        $like->user_id = auth()->user()->id;
        $like->save();
        return redirect()->back()->with('success','Thank you for your likes');
    }

    public function likeRemove(Request $request){
        $like = BlogLike::where('blog_id',$request->blog_id)->where('user_id',auth()->user()->id)->first();
        $like->delete();
        return redirect()->back()->with('success','Like Removed');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogLike $blogLike)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogLike $blogLike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogLike $blogLike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(BlogLike $blogLike)
    {

    }
}
