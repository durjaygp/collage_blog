<header id="mastheader" class="mastheader light header_style3">
    <div class="header_top">
        <div class="vb_container">
            <div class="header_top_entry">
                <div class="row">
                    @php
                        $categoryHeaders = \App\Models\Category::whereStatus(1)->latest()->limit(5)->get();
                        $categoryMenu = \App\Models\Category::whereStatus(1)->latest()->get();
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
                                @php
                                    $socials = \App\Models\Social::all();
                                @endphp
                                <ul class="social_icons_list">
                                    @foreach($socials as $row)
                                        <li><a href="{{$row->link}}"><i class="{{$row->icon}}" aria-hidden="true"></i></a></li>
                                    @endforeach
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
                    <li><a href="{{route('home')}}">Home</a>
                    </li>
                    <li><a href="#">Category</a>
                        <ul>
                            @foreach($categoryMenu as $row)
                                <li><a href="{{route('home.category',$row->slug)}}">{{$row->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="#">Archive Pages</a>
                        <ul>
                            <li><a href="archive.html">Archive I</a></li>
                            <li><a href="archive-2.html">Archive II</a></li>
                        </ul>
                    </li>
                    @auth
                        <li><a href="#"> {{auth()->user()->name}} </a>
                            <ul>
                                @if(auth()->user()->role->name ==='user')
                                <li><a href="{{route('profile.edit')}}">My Profile</a></li>
                                @else
                                    <li><a href="{{route('admin.index')}}">Admin Panel</a></li>
                                @endif
                                <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @else
                        <li><a href="#"> Login </a>
                            <ul>
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('register')}}">Registration</a></li>
                            </ul>
                        </li>
                    @endauth
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
