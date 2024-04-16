@extends('frontend.master')
@section('title')
    {{$category->name}}
@endsection
@section('content')
    <div class="vb_container">
        <div class="mid_portion_wrap search_page_mid_wrap">
            <div class="vb_breadcrumb breadtrails_style3">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">{{$category->name}}</a></li>
                </ul>
            </div>
            <!-- // vb_breadcrumb -->
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 sticky_portion">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="searchpage_entry">
                                <div class="page_title lined_page_title">
                                    <h2>Category <span> {{ $category->name }}</span></h2>
                                </div>
                                <div class="searchpage_contents_holder">
                                    <div class="vb_rp_list_style vb_post_formates">
                                        @foreach($blogs as $row)
                                            <div class="card">
                                                <div class="row">
                                                    <div class="col left_col">
                                                        <div class="post_thumb imghover">
                                                            <a href="#"><img src="{{asset($row->image)}}" alt="...."></a>
                                                            <div class="is_postformate">
                                                                <a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <!-- // post_thumb -->
                                                    </div>
                                                    <!-- // col -->
                                                    <div class="col right_col">
                                                        <div class="post_details">
                                                            <div class="entry_cats">
                                                                <ul class="categories">
                                                                    <li><a href="{{route('home.category',$category->slug)}}">{{$row->category->name}}</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="post_title">
                                                                <h3><a href="{{route('home.blog',$row->slug)}}">{{$row->name}}</a></h3>
                                                            </div>
                                                            <div class="meta">
                                                                <ul class="post_meta">
                                                                    <li class="posted_date"><a href="#">{{$row->created_at->format('Y M d')}}</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- // post_details -->
                                                    </div>
                                                    <!-- // col -->
                                                </div>
                                                <!-- // row -->
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- // vb_rp_list_style -->
                                    <div class="vb_pagination">
                                        <div class="pagi_style2">
                                            <ul class="clearfix">
                                                <!-- Previous Page Link -->
                                                @if ($blogs->onFirstPage())
                                                    <li class="disabled"><span>&laquo; Prev</span></li>
                                                @else
                                                    <li><a href="{{ $blogs->previousPageUrl() }}" rel="prev">&laquo; Prev</a></li>
                                                @endif

                                            <!-- Pagination Elements -->
                                                @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                                    <li class="{{ $i === $blogs->currentPage() ? 'page current' : 'page' }}">
                                                        <a href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor

                                            <!-- Next Page Link -->
                                                @if ($blogs->hasMorePages())
                                                    <li><a href="{{ $blogs->nextPageUrl() }}" rel="next">Next &raquo;</a></li>
                                                @else
                                                    <li class="disabled"><span>Next &raquo;</span></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- // vb_pagination -->
                                </div>
                                <!-- // searchpage_contents_holder -->
                            </div>
                            <!-- // nfpage_entry -->
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
@endsection
