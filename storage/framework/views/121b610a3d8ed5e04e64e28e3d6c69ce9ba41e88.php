			<section class="home-slider" id="up">

				<!-- swiper-wrapper start -->
			  	<div class="swiper-wrapper">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  	<!-- swiper-slide start -->
				  	<div class="swiper-slide flex-min-height-box home-slide <?php echo e($data->last()->id==$item->id ? 'red-slide':''); ?>">
					  	<!-- slide-bg -->
                        <div class="slide-bg overlay-loading2 overlay-dark-bg-1" style="background-image:url(<?php echo e(asset($item->getFirstMediaUrl('Page') )); ?>)"></div>
				      	<!-- home-slider-content start -->
                        
					  	<div class="home-slider-content flex-min-height-inner <?php echo e($data->last()->id==$item->id ? 'red-bg':'dark-bg-1'); ?>">
						  	<!-- flex-container start -->
					      	<div class="container top-bottom-padding-120 flex-container response-999">
						      	<!-- column start -->
						      	<div class="six-columns <?php echo e($data->last()->id==$item->id ? '':'six-offset'); ?>">
							      	<div class="content-left-margin-40">
							      	
								      	<h2 class="large-title-bold phone-mobile">
							  				<span class="slider-title-fill slider-tr-delay01" data-text="<?php echo e($item->title); ?>"><?php echo e($item->title); ?></span><br>
							  				<span class="slider-title-fill slider-tr-delay02" data-text="<?php echo e($item->sub_title); ?>"><?php echo e($item->sub_title); ?></span><br>
							  				<span class="slider-title-fill slider-tr-delay03" data-text="<?php echo e($item->title_tow); ?>"><?php echo e($item->title_tow); ?></span>
						  				</h2>
						  				<p class="p-style-bold-up text-height-20 d-flex-wrap phone-mobile">
										  	<span class="slider-title-fill slider-tr-delay04" data-text="<?php echo e($item->sub_title_tow); ?>"><?php echo e($item->sub_title_tow); ?></span><br>
										  	<span class="slider-title-fill slider-tr-delay05" data-text="<?php echo e($item->title_three); ?>"><?php echo e($item->title_three); ?></span><br>
										  	<span class="slider-title-fill slider-tr-delay06" data-text="<?php echo e($item->sub_title_three); ?>"><?php echo e($item->sub_title_three); ?></span><br>
										  	<span class="slider-title-fill slider-tr-delay06" data-text="<?php echo e($item->title_four); ?>"><?php echo e($item->title_four); ?></span><br>
										  	<span class="slider-title-fill slider-tr-delay06" data-text="<?php echo e($item->sub_title_four); ?>"><?php echo e($item->sub_title_four); ?></span><br>
									  	</p>
									  	
									  	<div class="slider-fade slider-tr-delay07 top-margin-30">
										  	<div class="border-btn-box border-btn-red pointer-large">
												<div class="border-btn-inner">
										      		<a href="<?php echo e($item->route); ?>" class="border-btn" data-text="<?php echo e($item->button); ?>"><?php echo e($item->button); ?></a>
										    	</div>
											</div>
									  	</div>
							      	</div>
						      	</div><!-- column end -->
					      	</div><!-- flex-container end -->
				      	</div><!-- home-slider-content end -->
				    </div><!-- swiper-slide end -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  	</div><!-- swiper-wrapper end -->
			  	
			  	<!-- swiper-button-next start -->
			  	<div class="swiper-button-next">
				  	<div class="slider-arrow-next-box">
					  	<span class="slider-arrow-next"></span>
				  	</div>
			  	</div><!-- swiper-button-next end -->
			  	<!-- swiper-button-prev start -->
			  	<div class="swiper-button-prev">
				  	<div class="slider-arrow-prev-box">
					  	<span class="slider-arrow-prev"></span>
				  	</div>
			  	</div><!-- swiper-button-prev end -->
			  	
			  	<!-- swiper-pagination -->
			  	<div class="swiper-pagination"></div>
			  	
			  	<!-- scroll-btn start -->
				<a href="#down" class="scroll-btn pointer-large">
					<div class="scroll-arrow-box">
						<span class="scroll-arrow"></span>
					</div>
					<div class="scroll-btn-flip-box">
						<span class="scroll-btn-flip" data-text="Scroll">Scroll</span>
					</div>
				 </a><!-- scroll-btn end -->
			</section><!-- home-slider end --><?php /**PATH /home/hatem/Desktop/boostplus/resources/views/components/home/slider.blade.php ENDPATH**/ ?>