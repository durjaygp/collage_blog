@extends('frontend.master')
@section('title')
    {{$event->title}}
@endsection
@section('content')
    <div class="vb_container">
        <div class="mid_portion_wrap post_page_mid_wrap">
            <div class="vb_breadcrumb breadtrails_style3">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">{{$event->title}}</a></li>
                </ul>
            </div>
            <!-- // vb_breadcrumb -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 sticky_portion">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="postpage_entry">
                                <div class="post_title">
                                    <h2>{{$event->title}}</h2>
                                </div>
                                <div class="meta">
                                    <ul class="post_meta">
                                        <li class="posted_date">Posted on : <a href="#">{{$event->created_at->format('Y M d')}}</a></li>
                                    </ul>
                                </div>
                                <div class="post_thumb post_media">
                                    <img src="{{asset($event->image)}}" alt="{{$event->title}}">
                                </div>
                                <div class="editor_contents">
                                    <p>
                                        {{ strip_tags($event->description) }}
                                    </p>

                                    <p>
                                        {{ strip_tags($event->main_content) }}
                                    </p>


                                </div>

                            </div>
                            <!-- // postpage_entry -->
                        </main>
                    </div>
                    <!-- // primary -->
                </div>
            </div>
            <!-- // main row -->
        </div>
        <!-- // mid_portion_wrap -->
    </div>
@endsection
