<?php $__env->startSection('titlefrontend'); ?>
<?php echo e(str_replace("-"," ",ucfirst(TranslationHelper::translate('Home')))); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('cssfrontend'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentfrontend'); ?>

<!-- animsition-overlay start -->
<main class="animsition-overlay" data-animsition-overlay="true">
   
    <?php if (isset($component)) { $__componentOriginal1915e22340e1514efa05d793036010fcc327ba13 = $component; } ?>
<?php $component = App\View\Components\Home\Slider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home.Slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Home\Slider::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1915e22340e1514efa05d793036010fcc327ba13)): ?>
<?php $component = $__componentOriginal1915e22340e1514efa05d793036010fcc327ba13; ?>
<?php unset($__componentOriginal1915e22340e1514efa05d793036010fcc327ba13); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal7634e54b012d2b08db7fcf502d9fbccc4767873a = $component; } ?>
<?php $component = App\View\Components\Home\Creative::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home.Creative'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Home\Creative::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7634e54b012d2b08db7fcf502d9fbccc4767873a)): ?>
<?php $component = $__componentOriginal7634e54b012d2b08db7fcf502d9fbccc4767873a; ?>
<?php unset($__componentOriginal7634e54b012d2b08db7fcf502d9fbccc4767873a); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal9031cb70e00a82d7d1910aa6006c639c37f0ef1b = $component; } ?>
<?php $component = App\View\Components\Home\RecentWork::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home.RecentWork'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Home\RecentWork::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9031cb70e00a82d7d1910aa6006c639c37f0ef1b)): ?>
<?php $component = $__componentOriginal9031cb70e00a82d7d1910aa6006c639c37f0ef1b; ?>
<?php unset($__componentOriginal9031cb70e00a82d7d1910aa6006c639c37f0ef1b); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal328f10c2834f113c99865524a5071817bd160f50 = $component; } ?>
<?php $component = App\View\Components\Home\Partenrs::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home.Partenrs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Home\Partenrs::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal328f10c2834f113c99865524a5071817bd160f50)): ?>
<?php $component = $__componentOriginal328f10c2834f113c99865524a5071817bd160f50; ?>
<?php unset($__componentOriginal328f10c2834f113c99865524a5071817bd160f50); ?>
<?php endif; ?>



   
</main>
<!-- animsition-overlay end -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('jsfrontend'); ?>
<script src="<?php echo e(asset('frontend/js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hatem/Desktop/boostplus/resources/views/frontend/page/home.blade.php ENDPATH**/ ?>