<!-- footer start -->
<footer class="footer dark-bg-1">
    <!-- flex-container start -->
    <div class="flex-container container top-bottom-padding-90">
        <!-- column start -->
        <div class="two-columns bottom-padding-60">
            <div class="content-right-margin-10 footer-center-mobile">
                <img class="footer-logo" src="{{ asset($logoBlack->getFirstMediaUrl('Logo') )}}" alt="logo">
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="three-columns bottom-padding-60">
            <div class="content-left-right-margin-10">
                <ul class="footer-menu text-color-4">
                    @foreach($pagesFooter as $footer)
                        <li>
                            <a class="pointer-large animsition-link small-title-oswald hover-color"
                                href="{{route('home',$footer->slug)}}">{{$footer->name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="four-columns bottom-padding-60">
            <div class="content-left-right-margin-10 footer-center-mobile">
                <ul class="footer-information text-color-4">
                    <li><i class="far fa-envelope"></i><a href="mailto:{{SettingHelper::settings('Email','email@xen_agency.com')}}" class="">{{SettingHelper::settings('Email','email@xen_agency.com')}}</a>
                    </li>
                    <li><i class="fas fa-mobile-alt"></i><a href="tel:{{SettingHelper::settings('Phone','+23 8 8532 7834')}}" class="xsmall-title-oswald">{{SettingHelper::settings('Phone','+23 8 8532 7834')}}</a>
                    </li>
                    <li><i class="fas fa-map-marker-alt"></i><a href="#" class="xsmall-title-oswald text-height-17">
                        {{SettingHelper::settings('Street','الخبر -المملكة العربية السعودية')}}</a></li>
                </ul>
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="three-columns bottom-padding-60">
            <div class="content-left-margin-10">
                <ul class="footer-social">
                    <li>
                        <div class="flip-btn-box">
                            <a href="{{SettingHelper::settings('Instagram','Instagram.com')}}" class="flip-btn pointer-small" data-text="Instagram">Instagram</a>
                        </div>
                    </li>
                    <li>
                        <div class="flip-btn-box">
                            <a href="{{SettingHelper::settings('Twitter','twitter.com')}}" class="flip-btn pointer-small" data-text="twitter">Twitter</a>
                        </div>
                    </li>
                    <li>
                        <div class="flip-btn-box">
                            <a href="{{SettingHelper::settings('LinkedIn','linkedin.com')}}" class="flip-btn pointer-small" data-text="linkedin">LinkedIn</a>
                        </div>
                    </li>
                    <li>
                        <div class="flip-btn-box">
                            <a href="{{SettingHelper::settings('YouTube','youtube.com')}}" class="flip-btn pointer-small" data-text="youtube">YouTube</a>
                        </div>
                    </li>
                    <li>
                        <div class="flip-btn-box">
                            <a href="{{SettingHelper::settings('Facebook','facebook.com')}}" class="flip-btn pointer-small" data-text="facebook">Facebook</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="twelve-columns">
            <p class="p-letter-style text-color-4 footer-copyright">&copy; {{SettingHelper::settings('Copyright','Copyright 2019 XEN. Theme by')}}<a
                    href="#">{{SettingHelper::settings('Author','Jinna Gik')}}</a></p>
        </div><!-- column end -->
    </div><!-- flex-container end -->
</footer><!-- footer end -->