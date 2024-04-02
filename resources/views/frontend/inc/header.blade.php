<header id="mastheader" class="mastheader light header_style3">
    <div class="header_top">
        <div class="vb_container">
            <div class="header_top_entry">
                <div class="row">
                    @php
                        $categoryHeaders = \App\Models\Category::whereStatus(1)->latest()->limit(5)->get();
                    @endphp
                    <div class="col nav_col">
                        <div class="secondary_nav">
                            <ul>
                                @foreach($categoryHeaders as $row)
                                    <li><a href="#">{{$row->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- // secondary nav -->
                    </div>
                    <!-- // col -->
                    <div class="col">
                        <div class="header_extra">
                            <div class="social">
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
                            <!-- // social_icons -->
                        </div>
                        <!-- // header_extra -->
                    </div>
                    <!-- // col -->
                </div>
                <!-- // row -->
            </div>
            <!-- // header_top_entry -->
        </div>
        <!-- // vb_container -->
    </div>
    <!-- // header_top -->
    <div class="site_idty_wrap">
        <div class="vb_container">
            <div class="site_idty_entry">
                <div class="logo">
                    <!-- <h1 class="site-title"><a href="#" rel="home">Viable Blog</a></h1>
                    <p class="site-description">Clean Modern blog Template</p> -->
                    <a href="index.html"><img src="{{asset('homePage')}}/img/logo_darkbig.png" alt="..."></a>
                </div>
                <!-- // logo -->
            </div>
            <!-- // site_idty_entry -->
        </div>
        <!-- // vb_container -->
    </div>
    <!-- // site_idty_wrap -->
    <nav class="main_navigation">
        <div class="vb_container">
            <div class="primary_navigation has_search">
                <ul>
                    <li><a href="#">Home Layout</a>
                        <ul>
                            <li><a href="index.html">Home I Grid</a></li>
                            <li><a href="index1-full.html">Home I Grid Full</a></li>
                            <li><a href="index-2.html">Home II List</a></li>
                            <li><a href="index2-full.html">Home II List Full</a></li>
                            <li><a href="index-3.html">Home III Masonry</a></li>
                            <li><a href="index3-full.html">Home III Masonry Full</a></li>
                            <li><a href="index-4.html">Home IV</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Single Pages</a>
                        <ul>
                            <li><a href="single.html">Single Page</a></li>
                            <li><a href="single-audio.html">Single Audio</a></li>
                            <li><a href="single-video.html">Single Classic Video</a></li>
                            <li><a href="single-gallery.html">Single Classic Gallery</a></li>
                            <li><a href="single-link.html">Single Classic Link</a></li>
                            <li><a href="single-quote.html">Single Classic Quote</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Archive Pages</a>
                        <ul>
                            <li><a href="archive.html">Archive I</a></li>
                            <li><a href="archive-2.html">Archive II</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Other Pages</a>
                        <ul>
                            <li><a href="search.html">Search I</a></li>
                            <li><a href="search-full.html">Search I Full</a></li>
                            <li><a href="404.html">404 page</a></li>
                            <li><a href="nothing-found.html">Nothing Found Page</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Purchase</a></li>
                </ul>
            </div>
            <!-- // primary_navigation -->
            <div class="header_search">
                <form class="clearfix">
                    <input type="search" name="search" placeholder="Type Something ...">
                    <input type="submit" value="Search">
                </form>
            </div>
            <!-- // header_search -->
        </div>
        <!-- // vb_container -->
    </nav>
</header>
