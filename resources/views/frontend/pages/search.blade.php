@extends('frontend.master')
@section('title')
{{$cleanedSearch}}
@endsection
@section('content')
    <div class="vb_container">
        <div class="mid_portion_wrap search_page_mid_wrap">
            <div class="vb_breadcrumb breadtrails_style1">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">{{$cleanedSearch}}</a></li>
                </ul>
            </div>
            <!-- // vb_breadcrumb -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 sticky_portion">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="searchpage_entry">
                                <div class="page_title lined_page_title">
                                    <h2>Search <span> {{$cleanedSearch}}</span></h2>
                                </div>
                                <div class="searchpage_contents_holder">
                                    <div class="vb_rp_grid_style vb_post_formates">
                                        <div class="row">
                                            @foreach($blog as $row)
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="card">
                                                        <div class="post_media standard imghover">
                                                            <a href="{{route('home.blog',$row->slug)}}"><img src="{{asset($row->image)}}" alt="{{$row->name}}"></a>
                                                        </div>
                                                        <!-- // post_media -->
                                                        <div class="card_content">
                                                            <div class="post_title">
                                                                <h3><a href="{{route('home.blog',$row->slug)}}">{{$row->name}}</a></h3>
                                                            </div>
                                                            <div class="excerpt">
                                                                <p>{{\Illuminate\Support\Str::limit($row->description,131)}} </p>
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
                                        <div class="pagi_style2">
                                            <ul class="clearfix">
                                                <!-- Previous Page Link -->
                                                @if ($blog->onFirstPage())
                                                    <li class="disabled"><span>&laquo; Prev</span></li>
                                                @else
                                                    <li><a href="{{ $blog->previousPageUrl() }}" rel="prev">&laquo; Prev</a></li>
                                                @endif

                                            <!-- Pagination Elements -->
                                                @for ($i = 1; $i <= $blog->lastPage(); $i++)
                                                    <li class="{{ $i === $blog->currentPage() ? 'page current' : 'page' }}">
                                                        <a href="{{ $blog->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endfor

                                            <!-- Next Page Link -->
                                                @if ($blog->hasMorePages())
                                                    <li><a href="{{ $blog->nextPageUrl() }}" rel="next">Next &raquo;</a></li>
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
            </div>
            <!-- // main row -->
        </div>
        <!-- // mid_portion_wrap -->
    </div>
@endsection
