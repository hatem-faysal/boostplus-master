<!-- footer start -->
<footer class="footer dark-bg-1">
    <!-- flex-container start -->
    <div class="flex-container container top-bottom-padding-90">
        <!-- column start -->
        <div class="two-columns bottom-padding-60">
            <div class="content-right-margin-10 footer-center-mobile">
                <img class="footer-logo" src="<?php echo e(asset($logoBlack->getFirstMediaUrl('Logo') )); ?>" alt="logo">
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="three-columns bottom-padding-60">
            <div class="content-left-right-margin-10">
                <ul class="footer-menu text-color-4">
                    <?php $__currentLoopData = $pagesFooter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a class="pointer-large animsition-link small-title-oswald hover-color"
                                href="<?php echo e(route('home',$footer->slug)); ?>"><?php echo e($footer->name); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="four-columns bottom-padding-60">
            <div class="content-left-right-margin-10 footer-center-mobile">
                <ul class="footer-information text-color-4">
                    <li><i class="far fa-envelope"></i><a href="mailto:<?php echo e(SettingHelper::settings('Email','email@xen_agency.com')); ?>" class=""><?php echo e(SettingHelper::settings('Email','email@xen_agency.com')); ?></a>
                    </li>
                    <li><i class="fas fa-mobile-alt"></i><a href="tel:<?php echo e(SettingHelper::settings('Phone','+23 8 8532 7834')); ?>" class="xsmall-title-oswald"><?php echo e(SettingHelper::settings('Phone','+23 8 8532 7834')); ?></a>
                    </li>
                    <li><i class="fas fa-map-marker-alt"></i><a href="#" class="xsmall-title-oswald text-height-17">
                        <?php echo e(SettingHelper::settings('Street','الخبر -المملكة العربية السعودية')); ?></a></li>
                </ul>
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="three-columns bottom-padding-60">
            <div class="content-left-margin-10">
                <ul class="footer-social">
                    <li>
                        <div class="flip-btn-box">
                            <a href="<?php echo e(SettingHelper::settings('Instagram','Instagram.com')); ?>" class="flip-btn pointer-small" data-text="Instagram">Instagram</a>
                        </div>
                    </li>
                    <li>
                        <div class="flip-btn-box">
                            <a href="<?php echo e(SettingHelper::settings('Twitter','twitter.com')); ?>" class="flip-btn pointer-small" data-text="twitter">Twitter</a>
                        </div>
                    </li>
                    <li>
                        <div class="flip-btn-box">
                            <a href="<?php echo e(SettingHelper::settings('LinkedIn','linkedin.com')); ?>" class="flip-btn pointer-small" data-text="linkedin">LinkedIn</a>
                        </div>
                    </li>
                    <li>
                        <div class="flip-btn-box">
                            <a href="<?php echo e(SettingHelper::settings('YouTube','youtube.com')); ?>" class="flip-btn pointer-small" data-text="youtube">YouTube</a>
                        </div>
                    </li>
                    <li>
                        <div class="flip-btn-box">
                            <a href="<?php echo e(SettingHelper::settings('Facebook','facebook.com')); ?>" class="flip-btn pointer-small" data-text="facebook">Facebook</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- column end -->
        <!-- column start -->
        <div class="twelve-columns">
            <p class="p-letter-style text-color-4 footer-copyright">&copy; <?php echo e(SettingHelper::settings('Copyright','Copyright 2019 XEN. Theme by')); ?><a
                    href="#"><?php echo e(SettingHelper::settings('Author','Jinna Gik')); ?></a></p>
        </div><!-- column end -->
    </div><!-- flex-container end -->
</footer><!-- footer end --><?php /**PATH /home/hatem/Desktop/boostplus/resources/views/components/frontend/footer.blade.php ENDPATH**/ ?>