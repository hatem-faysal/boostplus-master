			<!-- section start -->
			<section class="dark-bg-2">
				<!-- container start -->
				<div class="container small top-bottom-padding-120">
					<!-- medium-title start -->
					<h2 data-animation-container class="medium-title">
						<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="Fine Folks">Fine Folks</span><br>
						<span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="We’ve Worked">We’ve Worked</span><br>
						<span data-animation-child class="title-fill tr-delay02" data-animation="title-fill-anim" data-text="With">With</span>
					</h2><!-- medium-title end -->
					
					<!-- client-list start -->
					<ul class="client-list d-flex-wrap top-padding-60">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li>
							<a href="<?php echo e($image->route??'#'); ?>" class="pointer-large d-block">
								<div class="brand-box">
									<img src="<?php echo e(asset($image->getFirstMediaUrl('Page') )); ?>" alt="Brand" class="hover-opac-img">
									<img src="<?php echo e(asset($image->getFirstMediaUrl('Page2') )); ?>" alt="Brand" class="opac-img">
								</div>
							</a>
						</li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<li class="empty-spot-box">
							<a data-animation-container href="#" class="pointer-large p-style-bold-up empty-spot d-block">
								<span data-animation-child class="title-fill" data-animation="title-fill-anim" data-text="This spot">This spot</span>
								<span data-animation-child class="title-fill tr-delay01" data-animation="title-fill-anim" data-text="Awaits">Awaits</span>
								<span data-animation-child class="title-fill tr-delay02" data-animation="title-fill-anim" data-text="You">You</span>
							</a>
						</li>
					</ul><!-- client-list end -->
				</div><!-- container end -->
			</section><!-- section end --><?php /**PATH /home/hatem/Desktop/boostplus/resources/views/components/home/partenrs.blade.php ENDPATH**/ ?>