<nav class="nav-container dark-bg-1">
    <!-- nav-logo start -->
    <div class="nav-logo">
        <img src="{{ asset($model->getFirstMediaUrl('Logo') )}}" alt="logo">
    </div><!-- nav-logo end -->

    <!-- menu-close -->
    <div class="menu-close pointer-large"></div>

    <!-- dropdown-close-box start -->
    <div class="dropdown-close-box">
        <div class="dropdown-close pointer-large">
            <span></span>
        </div>
    </div><!-- dropdown-close-box end -->

    <!-- nav-menu start -->
    <ul class="nav-menu dark-bg-1">
       

    @foreach($pages as $page)
       

        <li class="nav-box nav-bg-change dropdown-open">

           @if($page->childes->count() > 0)
                <a  class="pointer-large nav-link">
                    <span class="nav-btn" data-text="{{$page->name}}">{{$page->name}}</span>
                </a>
                @else
                <a href="{{route('home',$page->slug)}}" class="pointer-large nav-link">
                    <span class="nav-btn" data-text="{{$page->name}}">{{$page->name}}</span>
                </a>

            @endif

            <!-- dropdown start -->
        @if(isset($page->childes))

            @foreach($page->childes as $childe)
            <ul class="dropdown">
                <li class="nav-box">
                    <a href="{{route('home',[$page->slug,$childe->slug])}}" class="animsition-link pointer-large">
                        <span class="nav-btn" data-text="Standard">{{$childe->name}}</span>
                    </a>
                </li>
            </ul><!-- dropdown end -->
            @endforeach

        @endif  

            <div class="nav-bg"
                style="background-image: url(assets/images/backgrounds/art-artistic-artsy-1988681.jpg);"></div>
        </li><!-- nav-box end -->

        @endforeach

       
    </ul><!-- nav-menu end -->
</nav><!-- nav-container end -->