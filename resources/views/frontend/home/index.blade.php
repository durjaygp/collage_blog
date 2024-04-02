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
                                                <li><a href="#">Lifestyle</a></li>
                                            </ul>
                                        </div>
                                        <div class="post_title">
                                            <h3><a href="#">Feeling special on valentines day</a></h3>
                                        </div>
                                        <div class="meta">
                                            <ul class="post_meta">
                                                <li class="posted_date"><a href="#">24 April 2018</a></li>
                                            </ul>
                                        </div>
                                        <!-- // post_meta -->
                                    </div>
                                    <!-- // top_box_content -->
                                    <div class="post-thumb imghover">
                                        <a href="#"><img src="./assets/dist/img/posts/one/1.jpg" alt="..."></a>
                                    </div>
                                    <!-- // post-media -->
                                    <div class="btm_box_content">
                                        <div class="excerpt">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est ...</p>
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
                                                            <li class="posted_by"><span>By :</span><a href="#">Lia Adnres</a></li>
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
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="post_media standard imghover">
                                                    <a href="#"><img src="assets/dist/img/posts/one/2.jpg" alt="..."></a>
                                                </div>
                                                <!-- // post_media -->
                                                <div class="card_content">
                                                    <div class="entry_cats">
                                                        <ul class="categories">
                                                            <li><a href="#">Fashion</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="post_title">
                                                        <h3><a href="#">Sun bath makes me more sexy day to day</a></h3>
                                                    </div>
                                                    <div class="excerpt">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos ... </p>
                                                    </div>
                                                </div>
                                                <!-- // card_content -->
                                            </div>
                                            <!-- // card -->
                                        </div>
                                        <!-- // col -->
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="post_media standard imghover">
                                                    <a href="#"><img src="assets/dist/img/posts/one/3.jpg" alt="..."></a>
                                                </div>
                                                <!-- // post_media -->
                                                <div class="card_content">
                                                    <div class="entry_cats">
                                                        <ul class="categories">
                                                            <li><a href="#">Travel</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="post_title">
                                                        <h3><a href="#">Trip to thailand was mind blowing</a></h3>
                                                    </div>
                                                    <div class="excerpt">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos ... </p>
                                                    </div>
                                                </div>
                                                <!-- // card_content -->
                                            </div>
                                            <!-- // card -->
                                        </div>
                                        <!-- // col -->
                                    </div>
                                    <!-- // row -->
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="post_media standard imghover">
                                                    <a href="#"><img src="assets/dist/img/posts/one/4.jpg" alt="..."></a>
                                                    <div class="is_postformate">
                                                        <a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <!-- // post_media -->
                                                <div class="card_content">
                                                    <div class="entry_cats">
                                                        <ul class="categories">
                                                            <li><a href="#">Travel</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="post_title">
                                                        <h3><a href="#">Fishing at Greece was awesome</a></h3>
                                                    </div>
                                                    <div class="excerpt">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos ... </p>
                                                    </div>
                                                </div>
                                                <!-- // card_content -->
                                            </div>
                                            <!-- // card -->
                                        </div>
                                        <!-- // col -->
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="post_media standard imghover">
                                                    <a href="#"><img src="assets/dist/img/posts/one/5.jpg" alt="..."></a>
                                                </div>
                                                <!-- // post_media -->
                                                <div class="card_content">
                                                    <div class="entry_cats">
                                                        <ul class="categories">
                                                            <li><a href="#">Blog</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="post_title">
                                                        <h3><a href="#">Getting ready to write a blog post</a></h3>
                                                    </div>
                                                    <div class="excerpt">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos ... </p>
                                                    </div>
                                                </div>
                                                <!-- // card_content -->
                                            </div>
                                            <!-- // card -->
                                        </div>
                                        <!-- // col -->
                                    </div>
                                    <!-- // row -->
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="post_media standard imghover">
                                                    <a href="#"><img src="assets/dist/img/posts/one/6.jpg" alt="..."></a>
                                                    <div class="is_postformate">
                                                        <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <!-- // post_media -->
                                                <div class="card_content">
                                                    <div class="entry_cats">
                                                        <ul class="categories">
                                                            <li><a href="#">Photography</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="post_title">
                                                        <h3><a href="#">Special photoshoot for music video</a></h3>
                                                    </div>
                                                    <div class="excerpt">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos ... </p>
                                                    </div>
                                                </div>
                                                <!-- // card_content -->
                                            </div>
                                            <!-- // card -->
                                        </div>
                                        <!-- // col -->
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="post_media standard imghover">
                                                    <a href="#"><img src="assets/dist/img/posts/one/7.jpg" alt="..."></a>
                                                </div>
                                                <!-- // post_media -->
                                                <div class="card_content">
                                                    <div class="entry_cats">
                                                        <ul class="categories">
                                                            <li><a href="#">Military</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="post_title">
                                                        <h3><a href="#">US marine force training session</a></h3>
                                                    </div>
                                                    <div class="excerpt">
                                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos ... </p>
                                                    </div>
                                                </div>
                                                <!-- // card_content -->
                                            </div>
                                            <!-- // card -->
                                        </div>
                                        <!-- // col -->
                                    </div>
                                    <!-- // row -->
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
                <div class="col-md-4 col-sm-12 col-xs-12 sticky_portion">
                    <div id="secondary" class="widget-area">
                        <div class="widget">
                            <div class="vb_author_widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <!-- // widget-title -->
                                <div class="widget_content">
                                    <div class="author_thumb">
                                        <img src="./assets/dist/img/author/1.jpg" alt="...">
                                    </div>
                                    <div class="author_name">
                                        <h4>Lia Andres</h4>
                                    </div>
                                    <div class="author_bio">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque ...</p>
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="author_signature">
                                        <img src="./assets/dist/img/author/signature.png" alt="...">
                                    </div>
                                </div>
                                <!-- // widget_content -->
                            </div>
                            <!-- // author_widget -->
                        </div>
                        <!-- // widget -->
                        <div class="widget">
                            <div class="vb_instafeed_widget">
                                <div class="widget-title">
                                    <h3>Instagram</h3>
                                </div>
                                <!-- // widget-title -->
                                <div class="widget_content">
                                    <ul class="clearfix">
                                        <li class="imghover"><a href="#"><img src="assets/dist/img/feeds/one/1.jpg" alt="..."></a></li>
                                        <li class="imghover"><a href="#"><img src="assets/dist/img/feeds/one/2.jpg" alt="..."></a></li>
                                        <li class="imghover"><a href="#"><img src="assets/dist/img/feeds/one/3.jpg" alt="..."></a></li>
                                        <li class="imghover"><a href="#"><img src="assets/dist/img/feeds/one/4.jpg" alt="..."></a></li>
                                        <li class="imghover"><a href="#"><img src="assets/dist/img/feeds/one/5.jpg" alt="..."></a></li>
                                        <li class="imghover"><a href="#"><img src="assets/dist/img/feeds/one/6.jpg" alt="..."></a></li>
                                    </ul>
                                    <div class="follow">
                                        <a href="#">Follow Me</a>
                                    </div>
                                    <!-- // follow -->
                                </div>
                                <!-- // widget_content -->
                            </div>
                        </div>
                        <!-- // widget -->
                        <div class="widget widget_categories">
                            <div class="widget_container">
                                <div class="widget-title">
                                    <h3>Categories</h3>
                                </div>
                                <!-- // widget-title -->
                                <ul>
                                    <li><a href="#">Lifestyle</a> (17)</li>
                                    <li><a href="#">Fashion</a> (20)</li>
                                    <li><a href="#">Health</a> (12)</li>
                                    <li><a href="#">Food</a> (6)</li>
                                    <li><a href="#">Travel</a> (55)</li>
                                    <li><a href="#">Style</a> (22)</li>
                                    <li><a href="#">Business</a> (29)</li>
                                    <li><a href="#">Photography</a> (4)</li>
                                    <li><a href="#">Military</a> (2)</li>
                                </ul>
                            </div>
                        </div>
                        <!-- // widget -->
                        <div class="widget">
                            <div class="vb_lastestpost_widget">
                                <div class="widget-title">
                                    <h3>Latest Posts</h3>
                                </div>
                                <!-- // widget-title -->
                                <div class="widget_content">
                                    <div class="box clearfix">
                                        <div class="left_box">
                                            <div class="post_thumb imghover">
                                                <a href="#"><img src="assets/dist/img/sidebar/1.jpeg" alt="...."></a>
                                            </div>
                                        </div>
                                        <!-- // left_box -->
                                        <div class="right_box">
                                            <div class="post_details">
                                                <h4><a href="#">Had a lovely unforgetable time with my husband</a></h4>
                                                <div class="meta">
                                                    <ul class="post_meta">
                                                        <li class="posted_date"><a href="#">24 April 2018</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- // post_details -->
                                        </div>
                                        <!-- // right_box -->
                                    </div>
                                    <!-- // box -->
                                    <div class="box clearfix">
                                        <div class="left_box">
                                            <div class="post_thumb imghover">
                                                <a href="#"><img src="assets/dist/img/sidebar/2.jpeg" alt="...."></a>
                                            </div>
                                        </div>
                                        <!-- // left_box -->
                                        <div class="right_box">
                                            <div class="post_details">
                                                <h4><a href="#">My brother gave me a suprise gift &amp; I loved that</a></h4>
                                                <div class="meta">
                                                    <ul class="post_meta">
                                                        <li class="posted_date"><a href="#">22 April 2018</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- // post_details -->
                                        </div>
                                        <!-- // right_box -->
                                    </div>
                                    <!-- // box -->
                                    <div class="box clearfix">
                                        <div class="left_box">
                                            <div class="post_thumb imghover">
                                                <a href="#"><img src="assets/dist/img/sidebar/3.jpeg" alt="...."></a>
                                            </div>
                                        </div>
                                        <!-- // left_box -->
                                        <div class="right_box">
                                            <div class="post_details">
                                                <h4><a href="#">Busy around weekend to decorate my living room</a></h4>
                                                <div class="meta">
                                                    <ul class="post_meta">
                                                        <li class="posted_date"><a href="#">18 April 2018</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- // post_details -->
                                        </div>
                                        <!-- // right_box -->
                                    </div>
                                    <!-- // box -->
                                    <div class="box clearfix">
                                        <div class="left_box">
                                            <div class="post_thumb imghover">
                                                <a href="#"><img src="assets/dist/img/sidebar/4.jpeg" alt="...."></a>
                                            </div>
                                        </div>
                                        <!-- // left_box -->
                                        <div class="right_box">
                                            <div class="post_details">
                                                <h4><a href="#">Chekout how I did this suprising decoration alone</a></h4>
                                                <div class="meta">
                                                    <ul class="post_meta">
                                                        <li class="posted_date"><a href="#">16 April 2018</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- // post_details -->
                                        </div>
                                        <!-- // right_box -->
                                    </div>
                                    <!-- // box -->
                                </div>
                                <!-- // widget_content -->
                            </div>
                            <!-- // vb_lastestpost_widget -->
                        </div>
                        <!-- // widget -->
                        <div class="widget">
                            <div class="advert_widget">
                                <div class="widget-title">
                                    <h3>Advertisement</h3>
                                </div>
                                <!-- // widget-title -->
                                <div class="widget_content">
                                    <a href="#"><img src="assets/dist/img/advertisement/1.jpg" alt="..."></a>
                                </div>
                            </div>
                            <!-- // advert_widget -->
                        </div>
                        <!-- // widget -->
                        <div class="widget widget_tags_cloud">
                            <div class="widget_container">
                                <div class="widget-title">
                                    <h3>Tags</h3>
                                </div>
                                <!-- // widget-title -->
                                <div class="tagcloud">
                                    <a href="#">Lifestyle<span>(44)</span></a>
                                    <a href="#">London<span>(66)</span></a>
                                    <a href="#">Paris<span>(2)</span></a>
                                    <a href="#">Travel thrills<span>(17)</span></a>
                                    <a href="#">Adventure<span>()</span></a>
                                    <a href="#">Lifestyle<span>(44)</span></a>
                                    <a href="#">Lifestyle<span>(44)</span></a>
                                </div>
                                <!-- // tagcloud -->
                            </div>
                            <!-- // widget_container -->
                        </div>
                        <!-- // widget -->
                        <div class="widget">
                            <div class="vb_cus_cats_widget">
                                <div class="widget-title">
                                    <h3>Categories</h3>
                                </div>
                                <!-- // widget-title -->
                                <div class="widget_content">
                                    <ul>
                                        <li style="background-image: url(./assets/dist/img/sidebar/cat1.jpeg)">
                                            <a href="#">Travel</a>
                                        </li>
                                        <li style="background-image: url(./assets/dist/img/sidebar/cat2.jpeg)">
                                            <a href="#">Fashion</a>
                                        </li>
                                        <li style="background-image: url(./assets/dist/img/sidebar/cat3.jpeg)">
                                            <a href="#">Food</a>
                                        </li>
                                        <li style="background-image: url(./assets/dist/img/sidebar/cat4.jpeg)">
                                            <a href="#">Technology</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- // widget_content -->
                            </div>
                            <!-- // vb_cus_cats_widget -->
                        </div>
                        <!-- // widget -->
                    </div>
                    <!-- // secondary -->
                </div>
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
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="card">
                            <div class="post_media imghover">
                                <a href="#"><img src="assets/dist/img/posts/editorial/1.jpeg" alt="..."></a>
                            </div>
                            <div class="card_content">
                                <div class="entry_cats">
                                    <ul class="categories">
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                    </ul>
                                </div>
                                <div class="post_title">
                                    <h3><a href="#">Bikiny &amp; white hat goes great cheers</a></h3>
                                </div>
                                <div class="excerpt">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...</p>
                                </div>
                            </div>
                            <!-- // card_content -->
                        </div>
                        <!-- // card -->
                    </div>
                    <!-- // col -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="card">
                            <div class="post_media imghover">
                                <a href="#"><img src="assets/dist/img/posts/editorial/3.jpeg" alt="..."></a>
                                <div class="is_postformate">
                                    <a href="#"><i class="fa fa-volume-up" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="card_content">
                                <div class="entry_cats">
                                    <ul class="categories">
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                                <div class="post_title">
                                    <h3><a href="#">Holiday at holland was really awesome</a></h3>
                                </div>
                                <div class="excerpt">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...</p>
                                </div>
                            </div>
                            <!-- // card_content -->
                        </div>
                        <!-- // card -->
                    </div>
                    <!-- // col -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="card">
                            <div class="post_media imghover">
                                <a href="#"><img src="assets/dist/img/posts/editorial/2.jpeg" alt="..."></a>
                            </div>
                            <div class="card_content">
                                <div class="entry_cats">
                                    <ul class="categories">
                                        <li><a href="#">Lifestyle</a></li>
                                    </ul>
                                </div>
                                <div class="post_title">
                                    <h3><a href="#">I still remmember when I had first kiss</a></h3>
                                </div>
                                <div class="excerpt">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...</p>
                                </div>
                            </div>
                            <!-- // card_content -->
                        </div>
                        <!-- // card -->
                    </div>
                    <!-- // col -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="card">
                            <div class="post_media imghover">
                                <a href="#"><img src="assets/dist/img/posts/editorial/6.jpeg" alt="..."></a>
                                <div class="is_postformate">
                                    <a href="#"><i class="fa fa-quote-left" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="card_content">
                                <div class="entry_cats">
                                    <ul class="categories">
                                        <li><a href="#">Lifestyle</a></li>
                                    </ul>
                                </div>
                                <div class="post_title">
                                    <h3><a href="#">A smile has millions of stories</a></h3>
                                </div>
                                <div class="excerpt">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...</p>
                                </div>
                            </div>
                            <!-- // card_content -->
                        </div>
                        <!-- // card -->
                    </div>
                    <!-- // col -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="card">
                            <div class="post_media imghover">
                                <a href="#"><img src="assets/dist/img/posts/editorial/4.png" alt="..."></a>
                            </div>
                            <div class="card_content">
                                <div class="entry_cats">
                                    <ul class="categories">
                                        <li><a href="#">Lifestyle</a></li>
                                    </ul>
                                </div>
                                <div class="post_title">
                                    <h3><a href="#">Holding a pineapple on my front</a></h3>
                                </div>
                                <div class="excerpt">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...</p>
                                </div>
                            </div>
                            <!-- // card_content -->
                        </div>
                        <!-- // card -->
                    </div>
                    <!-- // col -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="card">
                            <div class="post_media imghover">
                                <a href="#"><img src="assets/dist/img/posts/editorial/5.jpeg" alt="..."></a>
                            </div>
                            <div class="card_content">
                                <div class="entry_cats">
                                    <ul class="categories">
                                        <li><a href="#">Lifestyle</a></li>
                                    </ul>
                                </div>
                                <div class="post_title">
                                    <h3><a href="#">Got new tatoo &amp; 6 pack sexy body</a></h3>
                                </div>
                                <div class="excerpt">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ...</p>
                                </div>
                            </div>
                            <!-- // card_content -->
                        </div>
                        <!-- // card -->
                    </div>
                    <!-- // col -->
                </div>
                <!-- // row -->
            </div>
            <!-- // section_content -->
        </div>
        <!-- // vb_container -->
    </section>

@endsection
