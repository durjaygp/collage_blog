@extends('frontend.master')
@section('title')
{{$blog->name}}
@endsection
@section('content')
    <div class="vb_container">
        <div class="mid_portion_wrap post_page_mid_wrap">
            <div class="vb_breadcrumb breadtrails_style3">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">{{$blog->category->name}}</a></li>
                    <li><a href="#">{{$blog->name}}</a></li>
                </ul>
            </div>
            <!-- // vb_breadcrumb -->
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 sticky_portion">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="postpage_entry">
                                <div class="post_title">
                                    <h2>{{$blog->name}}</h2>
                                    @php
                                        $likes = \App\Models\BlogLike::where('user_id',auth()->user()->id)->where('blog_id',$blog->id)->first();
                                        $likesCount = \App\Models\BlogLike::where('blog_id',$blog->id)->count();

                                    @endphp

                                    @if($likes)
                                        <form action="{{route('like.remove')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                            <button class="button button-like liked">
                                                <i class="fa fa-heart"></i>
                                                <span>Liked ({{$likesCount}})</span>
                                            </button>
                                        </form>

                                    @else
                                        <form action="{{route('post-like.store')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                            <button class="button button-like">
                                                <i class="fa fa-heart"></i>
                                                <span>Like ({{$likesCount}})</span>
                                            </button>
                                        </form>
                                    @endif





                                    <style>
                                        .button-like {
                                            border: 2px solid #8a8a8a;
                                            background-color: transparent;
                                            text-decoration: none;
                                            padding: 1rem;
                                            position: relative;
                                            vertical-align: middle;
                                            text-align: center;
                                            display: inline-block;
                                            border-radius: 3rem;
                                            color: #8a8a8a;
                                            transition: all ease 0.4s;
                                        }

                                        .button-like span {
                                            margin-left: 0.5rem;
                                        }

                                        .button-like .fa,
                                        .button-like span {
                                            transition: all ease 0.4s;
                                        }

                                        .button-like:focus {
                                            background-color: transparent;
                                        }

                                        .button-like:focus .fa,
                                        .button-like:focus span {
                                            color: #8a8a8a;
                                        }

                                        .button-like:hover {
                                            border-color: #cc4b37;
                                            background-color: transparent;
                                        }

                                        .button-like:hover .fa,
                                        .button-like:hover span {
                                            color: #cc4b37;
                                        }

                                        .liked {
                                            background-color: #cc4b37;
                                            border-color: #cc4b37;
                                        }

                                        .liked .fa,
                                        .liked span {
                                            color: #fefefe;
                                        }

                                        .liked:focus {
                                            background-color: #cc4b37;
                                        }

                                        .liked:focus .fa,
                                        .liked:focus span {
                                            color: #fefefe;
                                        }

                                        .liked:hover {
                                            background-color: #cc4b37;
                                            border-color: #cc4b37;
                                        }

                                        .liked:hover .fa,
                                        .liked:hover span {
                                            color: #fefefe;
                                        }


                                    </style>

                                </div>
                                <div class="meta">
                                    <ul class="post_meta">
                                        <li class="posted_date">Posted on : <a href="#">{{$blog->created_at->format('Y M d')}}</a></li>
                                        <li class="posted_by">Posted by : <a href="#">{{$blog->user->name}}</a></li>
                                        <li class="posted_in">Posted in : <a href="#">{{$blog->category->name}}</a></li>
                                    </ul>
                                </div>
                                <div class="post_thumb post_media">
                                    <img src="{{asset($blog->image)}}" alt="{{$blog->name}}">
                                </div>
                                <div class="editor_contents">
                                    <p>
                                        {{ strip_tags($blog->main_content) }}
                                    </p>
                                </div>
                                <!-- // entry_tags -->
                                <div class="post_sharing">
                                    <span>Share this post</span>
                                    <ul class="social_icons_list">
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') }}/blog/{{ $blog->slug }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/intent/tweet?text={{ url('/') }}/blog/{{ $blog->slug }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.linkedin.com/sharing/share-offsite?url={{ url('/') }}/blog/{{ $blog->slug }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <!-- // social_sharing -->
                                <div class="author_box">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="author_thumb">
                                                <img src="{{asset($blog->user->image ?? "back/assets/images/profile/user-1.jpg")}}" alt="...">
                                            </div>
                                            <!-- // author_thumb -->
                                        </div>
                                        <!-- // col -->
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="author_details">
                                                <div class="author_name">
                                                    <h3>{{$blog->user->name}}</h3>
                                                </div>
                                                <!-- // author_name -->
                                                <div class="author_desc">
                                                    <p>{{$blog->user->personal_details}}</p>
                                                </div>
                                            </div>
                                            <!-- // author_details -->
                                        </div>
                                        <!-- // col -->
                                    </div>
                                    <!-- // row -->
                                </div>

                                <style>
                                    .author_box .form-group textarea {
                                        width: 100%;
                                        box-sizing: border-box; /* Ensure padding and border are included in the width */
                                    }
                                    .author_box label {
                                        font-weight: bold;
                                    }

                                    .author_box textarea {
                                        width: 100%;
                                        padding: 10px;
                                        border: 1px solid #ccc;
                                        border-radius: 5px;
                                        resize: vertical; /* Allow vertical resizing */
                                    }

                                    .author_box .comment-btn {
                                        background-color: #4CAF50;
                                        color: white;
                                        padding: 10px 20px;
                                        border: none;
                                        border-radius: 5px;
                                        cursor: pointer;
                                    }

                                    .author_box .comment-btn:hover {
                                        background-color: #45a049;
                                    }
                                    @media only screen and (max-width: 600px) {
                                        .author_thumb img.comment-image {
                                            max-width: 50px; /* Adjust as needed */
                                        }
                                    }
                                </style>
                                <div class="author_box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{route('comment.save')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="comment">Your Comment:</label>
                                                    <br>
                                                    <textarea name="comment" placeholder="Please write your comment" rows="5"></textarea>
                                                    <input type="hidden" name="id" value="{{auth()->user()->id}}">
                                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                                </div>
                                                <button type="submit" class="comment-btn">Submit</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>



                                @foreach($comments as $row)
                                    <div class="author_box_comm">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="author_thumb">
                                                    <img src="{{asset($row->user->image ?? "back/assets/images/profile/user-1.jpg")}}" class="comment-image" alt="">
                                                </div>
                                                <!-- // author_thumb -->
                                            </div>
                                            <!-- // col -->
                                            <div class="col-md-9">
                                                <div class="author_details">
                                                    <div class="author_name">
                                                        <h3>{{$row->user->name}}</h3>
                                                        <p>{{$row->created_at->diffForHumans()}}</p>
                                                    </div>
                                                    <!-- // author_name -->
                                                    <div class="author_desc">
                                                        <p>{{$row->comment}}</p>
                                                    </div>
                                                </div>
                                                <!-- // author_details -->
                                            </div>
                                            <!-- // col -->
                                        </div>
                                        <!-- // row -->
                                    </div>
                                @endforeach




                                <section class="related_posts">
                                    <div class="section_title">
                                        <span>You May Also Like</span>
                                    </div>
                                    <!-- // section_title -->
                                    <div class="vb_rp_grid_style vb_post_formates">
                                        <div class="row">
                                            @foreach($relatedBlogs as $row)
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="card">
                                                        <div class="post_media standard imghover">
                                                            <a href="#"><img src="{{asset($row->image)}}" alt="..."></a>
                                                        </div>
                                                        <!-- // post_media -->
                                                        <div class="card_content">
                                                            <div class="entry_cats">
                                                                <ul class="categories">
                                                                    <li><a href="#">{{$row->category->name}}</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="post_title">
                                                                <h3><a href="{{route('home.blog',$row->slug)}}">{{$row->name}}</a></h3>
                                                            </div>
                                                            <div class="excerpt">
                                                                <p>{{Str::limit($row->description,126)}}</p>
                                                            </div>
                                                        </div>
                                                        <!-- // card_content -->
                                                    </div>
                                                    <!-- // card -->
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                                <!-- // related_posts -->
                            </div>
                            <!-- // postpage_entry -->
                        </main>
                    </div>
                    <!-- // primary -->
                </div>
                <!-- // main left col -->
                @include('frontend.inc.right_side')
                <!-- // main right col -->
            </div>
            <!-- // main row -->
        </div>
        <!-- // mid_portion_wrap -->
    </div>
@endsection


