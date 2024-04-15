<footer class="footer dark">
    <div class="vb_container">
        <div class="vb_topfooter">
            <div class="social">
                <ul class="social_icons_list">
                    @php
                        $socials = \App\Models\Social::all();
                    @endphp
                    @foreach($socials as $row)
                        <li><a href="{{$row->link}}"><i class="{{$row->icon}}" aria-hidden="true"></i> {{$row->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- // social -->
        </div>
        <!-- // vb_container -->

        <!-- // vb_bottomfooter -->
    </div>
    <div class="vb_bottomfooter">
        <div class="vb_container">
            <div class="row">
                <div class="col left_col">
                    <div class="copyright">
                        <p>{{$website->footer}}</p>
                    </div>
                    <!-- // copyright -->
                </div>
                <div class="col right_col">
                    <div class="footer_nav">
                        @php
                            $category = \App\Models\Category::all();
                        @endphp
                        <ul>
                            @foreach($category as $row)
                                <li><a href="#">{{$row->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- // copyright -->
                </div>
            </div>
            <!-- // row -->
        </div>
        <!-- // vb_container -->
    </div>
</footer>
