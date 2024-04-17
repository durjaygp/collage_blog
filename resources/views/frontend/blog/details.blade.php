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
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <!-- // social_sharing -->
                                <div class="author_box">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="author_thumb">
                                                <img src="./assets/dist/img/author/1.jpg" alt="...">
                                            </div>
                                            <!-- // author_thumb -->
                                        </div>
                                        <!-- // col -->
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="author_details">
                                                <div class="author_name">
                                                    <h3>Lia Andres</h3>
                                                </div>
                                                <!-- // author_name -->
                                                <div class="author_desc">
                                                    <p>Lia is a WordPress lover, digital marketing, SEO, and blogging enthusiast. She loves writing artiles, blog posts and meeting new peoples around the world.</p>
                                                </div>
                                                <!-- // author_desc -->
                                                <div class="author_social">
                                                    <ul class="social_icons_list">
                                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- // author_social -->
                                            </div>
                                            <!-- // author_details -->
                                        </div>
                                        <!-- // col -->
                                    </div>
                                    <!-- // row -->
                                </div>
                                <!-- // author_box -->
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
