@extends('frontend.master')
@section('title')
    Homepage
@endsection
@section('content')
    <section class="vb_banner">
        <div class="owl-carousel vb_banner_style_3">
            @foreach($slider as $row)
                <div class="item">
                    <div class="card">
                        <div class="post_thumb" style="background-image: url({{asset($row->image)}})">
                            <div class="card_content">
                                <div class="entry_cats">
                                    <ul class="categories">
                                        <li><a href="#">{{$row->category->name}}</a></li>
                                    </ul>
                                </div>
                                <!-- // entry_cats -->
                                <div class="post_title">
                                    <h2><a href="#">{{$row->name}}</a></h2>
                                </div>
                                <!-- // title -->
                                <div class="the_permalink">
                                    <a class="btn_general" href="#">Read More</a>
                                </div>
                                <!-- // the_permalink -->
                            </div>
                            <!-- // card_content -->
                            <div class="mask"></div>
                        </div>
                        <!-- // post_thumb -->
                    </div>
                    <!-- // card -->
                </div>
            @endforeach
        </div>
        <!-- // owl-carousel -->
    </section>

    <!-- // vb_banner -->
    <div class="vb_container">
        <div class="vb_featured featured_style_1">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="card">
                        <div class="post_thumb">
                            <img src="img/1.jpg" alt="...">
                            <div class="card_content">
                                <div class="the_permalink">
                                    <a href="#">About Me</a>
                                </div>
                                <!-- // the_permalink -->
                            </div>
                            <!-- // card_content -->
                        </div>
                        <!-- // post_thumb -->
                    </div>
                    <!-- // card -->
                </div>
                <!-- // col -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="card">
                        <div class="post_thumb">
                            <img src="./assets/dist/img/featured/one/2.jpg" alt="...">
                            <div class="card_content">
                                <div class="the_permalink">
                                    <a href="#">Style</a>
                                </div>
                                <!-- // the_permalink -->
                            </div>
                            <!-- // card_content -->
                        </div>
                        <!-- // post_thumb -->
                    </div>
                    <!-- // card -->
                </div>
                <!-- // col -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="card">
                        <div class="post_thumb">
                            <img src="./assets/dist/img/featured/one/3.jpg" alt="...">
                            <div class="card_content">
                                <div class="the_permalink">
                                    <a href="#">Travel</a>
                                </div>
                                <!-- // the_permalink -->
                            </div>
                            <!-- // card_content -->
                        </div>
                        <!-- // post_thumb -->
                    </div>
                    <!-- // card -->
                </div>
                <!-- // col -->
            </div>
            <!-- // row -->
        </div>
        <!-- // vb_featured -->
        <div class="mid_portion_wrap frontpage_mid_wrap">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 sticky_portion">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="recent_posts_holder">

                                    <article class="box first_article">
                                        <div class="top_box_content">
                                            <div class="entry_cats">
                                                <ul class="categories">
                                                    <li><a href="#">{{$featuredBlog->category->name}}</a></li>
                                                </ul>
                                            </div>
                                            <div class="post_title">
                                                <h3><a href="#">{{$featuredBlog->name}}</a></h3>
                                            </div>
                                            <div class="meta">
                                                <ul class="post_meta">
                                                    <li class="posted_date"><a href="#">{{$featuredBlog->created_at}}</a></li>
                                                </ul>
                                            </div>
                                            <!-- // post_meta -->
                                        </div>
                                        <!-- // top_box_content -->
                                        <div class="post-thumb imghover">
                                            <a href="#"><img src="{{asset($featuredBlog->image)}}" alt="..."></a>
                                        </div>
                                        <!-- // post-media -->
                                        <div class="btm_box_content">
                                            <div class="excerpt">
                                                <p>{{$featuredBlog->description}}</p>
                                            </div>
                                            <!-- // excerpt -->
                                            <div class="the_permalink">
                                                <a href="#" class="btn_general">Continue Reading</a>
                                            </div>
                                            <!-- // the_permalink -->
                                            <div class="extra">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="meta">
                                                            <ul class="post_meta">
                                                                <li class="posted_by"><span>By :</span><a href="#">{{$featuredBlog->user->name}}</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="social_sharing">
                                                            <ul class="social_icons_list">
                                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- // extra -->
                                        </div>
                                        <!-- // btm_box_content -->
                                    </article>

                                <div class="vb_rp_grid_style vb_post_formates">
                                    <div class="row">
                                        @foreach($remainingBlogs as  $row)
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="card">
                                                    <div class="post_media standard imghover">
                                                        <a href="#"><img src="{{asset($row->image)}}" alt="..."></a>
                                                    </div>
                                                    <!-- // post_media -->
                                                    <div class="card_content">
                                                        <div class="entry_cats">
                                                            <ul class="categories">
                                                                <li><a href="#">{{ $row->category->name }}</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="post_title">
                                                            <h3><a href="#">{{$row->name}}</a></h3>
                                                        </div>
                                                        <div class="excerpt">
                                                            <p>{{\Illuminate\Support\Str::limit($row->description,154)}}</p>
                                                        </div>
                                                    </div>
                                                    <!-- // card_content -->
                                                </div>
                                                <!-- // card -->
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- // vb_rp_grid_style -->
                                <div class="vb_pagination">
                                    <div class="pagi_style1">
                                        <ul class="clearfix">
                                            <li class="previous"><a href="#">Prev</a></li>
                                            <li class="next"><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- // vb_pagination -->
                            </div>
                            <!-- // recent_posts_holder -->
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
    <!-- // vb_container -->

    <section class="vb_editorial_picks">
        <div class="vb_container">
            <div class="section_title">
                <h2>Editorial Picks</h2>
            </div>
            <div class="section_content">
                <div class="row">
                    @php
                    $editBlogs = \App\Models\Blog::whereStatus(1)->wherePosition(2)->limit(6)->get();
                    @endphp
                    @foreach($editBlogs as $row)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="card">
                            <div class="post_media imghover">
                                <a href="#"><img src="{{asset($row->image)}}" alt="..."></a>
                            </div>
                            <div class="card_content">
                                <div class="entry_cats">
                                    <ul class="categories">
                                        <li><a href="#">{{$row->category->name}}</a></li>
                                    </ul>
                                </div>
                                <div class="post_title">
                                    <h3><a href="#">{{$row->name}}</a></h3>
                                </div>
                                <div class="excerpt">
                                    <p>{{\Illuminate\Support\Str::limit($row->description,85)}} ...</p>
                                </div>
                            </div>
                            <!-- // card_content -->
                        </div>
                        <!-- // card -->
                    </div>
                    @endforeach
                </div>
                <!-- // row -->
            </div>
            <!-- // section_content -->
        </div>
        <!-- // vb_container -->
    </section>

@endsection
