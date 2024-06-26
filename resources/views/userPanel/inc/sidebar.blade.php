 <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{route('dashboard')}}" class="text-nowrap logo-img">
                    <img src="{{asset('admin.png')}}" class="dark-logo" width="180" alt="" />
                    <img src="{{asset('admin.png')}}" class="light-logo"  width="180" alt="" />
                </a>
                <div class="cursor-pointer close-btn d-lg-none d-block sidebartoggler" id="sidebarCollapse">
                    <i class="ti ti-x fs-8 text-muted"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                <ul id="sidebarnav">
                    <!-- ============================= -->
                    <!-- Intro -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Dashboard</span>
                    </li>
                    <!-- =================== -->
                    <!-- Dashboard -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                {{-- Main sidebar start --}}
                <!-- =================== -->
                    <!-- Recipe Intro -->
                    <!-- =================== -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Blog</span>
                    </li>
                    <!-- =================== -->
                    <!-- Books -->
                    <!-- =================== -->

                    <!-- =================== -->

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('userBlog.list')}}">
                  <span>
                    <i class="ti ti-brand-blogger"></i>
                  </span>
                            <span class="hide-menu">Blog</span>
                        </a>
                    </li>

                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Website</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('home')}}" target="_blank">
                  <span>
                    <i class="ti ti-world"></i>
                  </span>
                            <span class="hide-menu">Visit Website</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>

