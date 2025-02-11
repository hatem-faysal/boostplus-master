<!-- header start -->
<header class="fixed-header">
    <!-- header-flex-box start -->
    <div class="header-flex-box">
        <!-- logo start -->
        <a href="{{ route('home') }}" class="logo pointer-large animsition-link">
            <div class="logo-img-box">
                <img class="logo-black" src="{{ asset($logoBlack->getFirstMediaUrl('Logo') )}}" alt="logo">
                <img class="logo-white" src="{{ asset($logoWhite->getFirstMediaUrl('Logo') )}}" alt="logo">
            </div>
        </a><!-- logo end -->

        <!-- menu-open start -->
        <div class="menu-open pointer-large">
            <span class="hamburger"></span>
        </div><!-- menu-open end -->
    </div><!-- header-flex-box end -->
</header>
<!-- header end -->