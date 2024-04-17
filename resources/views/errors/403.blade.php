@extends('frontend.master')
@section('title','404')
@section('content')
    <div class="vb_container" style="transform: none;">
        <div class="mid_portion_wrap no_sidebar error_page_mid_wrap" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="col-md-12 col-sm-12 col-xs-12 sticky_portion" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                    <!-- // primary -->
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="errorpage_entry">
                                    <div class="error_head">
                                        <h2>404</h2>
                                        <h3>Error page not found!</h3>
                                    </div>
                                    <div class="error_message">
                                        <p>The page you are looking is not found. Go back to homepage.</p>
                                    </div>
                                    <div class="error_action">
                                        <div class="the_permalink">
                                            <a href="{{route('home')}}" class="btn_general">Go Homepage</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- // errorpage_entry -->
                            </main>
                        </div></div></div>
                <!-- // main left col -->
            </div>
            <!-- // main row -->
        </div>
        <!-- // mid_portion_wrap -->
    </div>


@endsection
