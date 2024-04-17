<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\FavoriteGames;
use App\Models\Game;
use App\Models\NewPages;
use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\Response;
use Gate;



class WebController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $who = $user->user_type_id;
        if ($who == 1){
            $blogsQuery = Blog::whereStatus(1)
                ->wherePosition(1)
                ->latest();
            $remainingBlogs = $blogsQuery->paginate(8);
            $featuredBlog = $blogsQuery->first();
            $slider = Blog::latest()
                ->whereStatus(1)
                ->wherePosition(0)
                ->take(4)
                ->get();
            $editBlogs = Blog::whereStatus(1)->wherePosition(2)->limit(6)->get();
        }else{
            $blogsQuery = Blog::where('type_id', $who)
            ->whereStatus(1)
                ->wherePosition(1)
                ->latest();
            $remainingBlogs = $blogsQuery->paginate(8);
            $featuredBlog = $blogsQuery->first();
            $slider = Blog::latest()
                ->whereStatus(1)
                ->where('type_id', $who)
                ->wherePosition(0)
                ->take(4)
                ->get();
            $editBlogs = Blog::whereStatus(1)->wherePosition(2)->limit(6)->where('type_id', $who)->get();
        }
        return view('frontend.home.index', compact('slider','editBlogs', 'featuredBlog', 'remainingBlogs'));
    }

    public function blogDetails($slug){
        $blog = Blog::where('slug',$slug)->firstOrFail();
        $comments = Comment::where('blog_id', $blog->id)->get();
        $user = auth()->user();
        $who = $user->user_type_id;
        if ($who == 1){
            $relatedBlogs = Blog::whereStatus(1)->take(4)->get();
        }else{
            $relatedBlogs = Blog::whereStatus(1)
                ->where('type_id',$who)
                ->take(4)->get();
        }


        $wordCount = str_word_count(strip_tags($blog->main_content));
        $readingTime = ceil($wordCount / 200);
        return view('frontend.blog.details',compact('blog','comments','relatedBlogs','readingTime'));
    }

    public function category($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $mainId = $category->id;
        $blogs = Blog::where('category_id', $mainId)->whereStatus(1)->paginate(10);
        return view('frontend.category.category', compact('category', 'blogs'));
    }

    public function details($slug)
    {
        $event = NewPages::where('slug',$slug)->first();
        return view('frontend.events.details',compact('event'));
    }

    public function privacyPolicy(){
        $privacy = Page::find(1);
        return view('frontEnd_old.pages.privacy',compact('privacy'));
    }


    public function searchRecipe(Request $request){
        $search = '%' . $request->input('search') . '%';

        $cleanedSearch = str_replace('%', '', $search);

        $blog = Blog::where('name', 'like', $search)
            ->orWhere('description', 'like', $search)
            ->orWhere('main_content', 'like', $search)
            ->orWhere('ingredients', 'like', $search)
            ->get();

        return view('frontEnd_old.blog.search', compact('blog', 'cleanedSearch'));
    }

    public function siteMap(): Response // Update the type hint to Illuminate\Http\Response
    {
        $posts = Blog::latest()->get();

        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }




}
