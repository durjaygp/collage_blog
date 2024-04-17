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
                                                            <a href="{{route('home.blog',$row->slug)}}"><img src="{{asset($row->image)}}" alt="{{$row->name}}"></a>
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
                 @include('frontend.inc.right_side')
                <!-- // main right col -->
            </div>
            <!-- // main row -->
        </div>
        <!-- // mid_portion_wrap -->
    </div>
@endsection
