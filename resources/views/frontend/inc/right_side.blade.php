@php
    $aboutme = \App\Models\About::find(1);
   $categories = \App\Models\Category::latest()
    ->withCount(['blog' => function ($query) {
        $query->where('status', 1);
    }])->where('status', 1)->take(10)->get();

$user_type_id = auth()->user()->user_type_id;

      if ($user_type_id == 1){
            $latBlogs = \App\Models\Blog::whereStatus(1)->take(5)->get();
        }else{
            $latBlogs = \App\Models\Blog::whereStatus(1)
                ->where('type_id',$user_type_id)->take(5)->get();
      }


@endphp

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
                        <img src="{{asset($aboutme->image)}}" alt="{{$aboutme->title}}">
                    </div>
                    <div class="author_name">
                        <h4>{{$aboutme->title}}</h4>
                    </div>
                    <div class="author_bio">
                        <p>{{$aboutme->description}}</p>
                    </div>

                </div>
                <!-- // widget_content -->
            </div>
            <!-- // author_widget -->
        </div>


        <div class="widget widget_categories">
            <div class="widget_container">
                <div class="widget-title">
                    <h3>Categories</h3>
                </div>
                <!-- // widget-title -->
                <ul>
                    @foreach($categories as $row)
                        <li><a href="{{route('home.category',$row->slug)}}">{{$row->name}}</a> ({{$row->blog_count}})</li>
                    @endforeach
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
                    @foreach($latBlogs as $row)
                        <div class="box clearfix">
                            <div class="left_box">
                                <div class="post_thumb imghover">
                                    <a href="{{route('home.blog',$row->slug)}}"><img src="{{asset($row->image)}}" alt="{{$row->name}}"></a>
                                </div>
                            </div>
                            <!-- // left_box -->
                            <div class="right_box">
                                <div class="post_details">
                                    <h4><a href="{{route('home.blog',$row->slug)}}">{{$row->name}}</a></h4>
                                    <div class="meta">
                                        <ul class="post_meta">
                                            <li class="posted_date"><a href="{{route('home.blog',$row->slug)}}">{{$row->created_at->format('Y M d')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- // post_details -->
                            </div>
                            <!-- // right_box -->
                        </div>
                    @endforeach

                </div>
                <!-- // widget_content -->
            </div>
            <!-- // vb_lastestpost_widget -->
        </div>
        <!-- // widget -->


        <!-- // widget -->
    </div>
    <!-- // secondary -->
</div>
