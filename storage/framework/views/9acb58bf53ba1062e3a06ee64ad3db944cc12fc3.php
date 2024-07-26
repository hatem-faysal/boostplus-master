<nav class="nav-container dark-bg-1">
    <!-- nav-logo start -->
    <div class="nav-logo">
        <img src="<?php echo e(asset($model->getFirstMediaUrl('Logo') )); ?>" alt="logo">
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
       

    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       

        <li class="nav-box nav-bg-change dropdown-open">

           <?php if($page->childes->count() > 0): ?>
                <a  class="pointer-large nav-link">
                    <span class="nav-btn" data-text="<?php echo e($page->name); ?>"><?php echo e($page->name); ?></span>
                </a>
                <?php else: ?>
                <a href="<?php echo e(route('home',$page->slug)); ?>" class="pointer-large nav-link">
                    <span class="nav-btn" data-text="<?php echo e($page->name); ?>"><?php echo e($page->name); ?></span>
                </a>

            <?php endif; ?>

            <!-- dropdown start -->
        <?php if(isset($page->childes)): ?>

            <?php $__currentLoopData = $page->childes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="dropdown">
                <li class="nav-box">
                    <a href="<?php echo e(route('home',[$page->slug,$childe->slug])); ?>" class="animsition-link pointer-large">
                        <span class="nav-btn" data-text="Standard"><?php echo e($childe->name); ?></span>
                    </a>
                </li>
            </ul><!-- dropdown end -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>  

            <div class="nav-bg"
                style="background-image: url(assets/images/backgrounds/art-artistic-artsy-1988681.jpg);"></div>
        </li><!-- nav-box end -->

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       
    </ul><!-- nav-menu end -->
</nav><!-- nav-container end --><?php /**PATH /home/hatem/Desktop/boostplus/resources/views/components/frontend/nav.blade.php ENDPATH**/ ?>