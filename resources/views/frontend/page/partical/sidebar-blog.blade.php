    <aside class="four-columns bottom-padding-90">
        <!-- sidebar start -->
        <div class="sidebar content-left-margin-40 red-bg">
            <!-- sidebar-box start -->
            <div class="sidebar-box">
                <!-- form search start -->
                <div class="top-bottom-padding-90">
                    <form class="form-search">
                        <input type="text" class="search-control pointer-small" placeholder="Search...">
                        <button class="search-btn pointer-large" type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div><!-- form search end -->
                
                <!-- widget-categories start -->
                <div class="widget-categories bottom-padding-90">
                    <h4 class="p-style-bold-up red-color">Blogs</h4>
                    <ul class="top-margin-30 red-color">
                        @foreach ($DataLatest as $item)
                        <li>
                            <a href="{{ route('blog.front',$item->slug) }}" class="pointer-small small-title-oswald">{{ $item->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div><!-- widget-categories end -->
            
                <!-- recent posts start -->
                <div class="bottom-padding-90">
                    <h4 class="p-style-bold-up red-color">recent posts</h4>
                    <!-- recent posts content start -->
                    <div class="top-margin-30">
                        
                    @foreach ($DataLatest as $item)
                        <!-- recent-entry start -->
                        <div class="recent-entry">
                            <a href="{{ route('blog.front',$item->slug) }}" class="recent-entry-img-box pointer-large animsition-link">
                                <img src="{{ asset($item->getFirstMediaUrl('Blogs') )}}" alt="{{ $item->title }}">
                            </a>
                            <div class="recent-desc">
                                <a href="{{ route('blog.front',$item->slug) }}" class="xsmall-title-oswald text-color-4 pointer-large animsition-link">{{ $item->title }}</a>
                                <div class="p-style-xsmall text-color-4 text-height-10 top-margin-5">{{ $item->created_at->toFormattedDateString('Y-m-d') }}</div>
                                <div class="p-style-xsmall text-color-4 text-height-10 top-margin-5">December 28, 2018</div>
                            </div>
                        </div><!-- recent-entry end -->
                    @endforeach


                    </div><!-- recent posts content end -->
                </div><!-- recent posts end -->
                
            </div><!-- sidebar-box end -->
        </div><!-- sidebar end -->
    </aside><!-- column end -->