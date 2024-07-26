

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <?php if (isset($component)) { $__componentOriginal31371099e20e210603f6f28175a13c386956fb46 = $component; } ?>
<?php $component = App\View\Components\Meta\Meta::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Meta.Meta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Meta\Meta::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal31371099e20e210603f6f28175a13c386956fb46)): ?>
<?php $component = $__componentOriginal31371099e20e210603f6f28175a13c386956fb46; ?>
<?php unset($__componentOriginal31371099e20e210603f6f28175a13c386956fb46); ?>
<?php endif; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <title> <?php echo $__env->yieldContent('titlefrontend'); ?> </title>
	<?php echo $__env->make('frontend.layouts.css.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</head>

<body class="loader">
	<!-- loading start -->
	<?php if (isset($component)) { $__componentOriginaldfe49835b57b3ef381c0eb06c250411ca8faf31f = $component; } ?>
<?php $component = App\View\Components\Loading\Loading::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Loading.Loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Loading\Loading::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldfe49835b57b3ef381c0eb06c250411ca8faf31f)): ?>
<?php $component = $__componentOriginaldfe49835b57b3ef381c0eb06c250411ca8faf31f; ?>
<?php unset($__componentOriginaldfe49835b57b3ef381c0eb06c250411ca8faf31f); ?>
<?php endif; ?>

	    
		<!-- pointer start -->
		<div class="pointer" id="pointer">
			<i class="fas fa-long-arrow-alt-right"></i>
			<i class="fas fa-search"></i>
			<i class="fas fa-link"></i>
		</div><!-- pointer end -->
		
		<!-- to-top-btn start -->
		<a class="to-top-btn pointer-small" href="#up">
			  <span class="to-top-arrow"></span>		    
		</a><!-- to-top-btn end -->
	    
		<?php if (isset($component)) { $__componentOriginal2770200d78e0e3abb39a6a674cf377be7180de73 = $component; } ?>
<?php $component = App\View\Components\Frontend\Head::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Frontend.Head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Frontend\Head::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2770200d78e0e3abb39a6a674cf377be7180de73)): ?>
<?php $component = $__componentOriginal2770200d78e0e3abb39a6a674cf377be7180de73; ?>
<?php unset($__componentOriginal2770200d78e0e3abb39a6a674cf377be7180de73); ?>
<?php endif; ?>

		
       <?php if (isset($component)) { $__componentOriginal9ea095877d5f1dbdad27921b87a3011350f47fdf = $component; } ?>
<?php $component = App\View\Components\Frontend\Nav::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Frontend.Nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Frontend\Nav::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ea095877d5f1dbdad27921b87a3011350f47fdf)): ?>
<?php $component = $__componentOriginal9ea095877d5f1dbdad27921b87a3011350f47fdf; ?>
<?php unset($__componentOriginal9ea095877d5f1dbdad27921b87a3011350f47fdf); ?>
<?php endif; ?>

		<?php echo $__env->yieldContent('contentfrontend'); ?>

		<?php if (isset($component)) { $__componentOriginalcf1b38e24f6313691245ea870737e9b955d012cb = $component; } ?>
<?php $component = App\View\Components\Frontend\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Frontend.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Frontend\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf1b38e24f6313691245ea870737e9b955d012cb)): ?>
<?php $component = $__componentOriginalcf1b38e24f6313691245ea870737e9b955d012cb; ?>
<?php unset($__componentOriginalcf1b38e24f6313691245ea870737e9b955d012cb); ?>
<?php endif; ?>

	<?php echo $__env->make('frontend.layouts.js.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>

<?php /**PATH /home/hatem/Desktop/boostplus/resources/views/frontend/layouts/master.blade.php ENDPATH**/ ?>