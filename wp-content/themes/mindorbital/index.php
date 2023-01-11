<?php

/**
 * Template Name: Home
 */
get_header() ?>
<!--   Header area End-->
<!--   Banner area Start-->
<section class="banner-area overflow-hidden">
	<!-- start of hero -->
	<section class="hero-slider hero-style">
		<div class="banner-overlay"></div>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php while (have_rows('slider')) : the_row(); ?>
					<div class="swiper-slide">
						<div class="slide-inner slide-bg-image" data-background="<?= get_sub_field('bg_img'); ?>">
							<div class="container">
								<div data-swiper-parallax="300" class="slide-title">
									<h1 class="color-white"><?= get_sub_field('title_one'); ?></br>
										<?= get_sub_field('title_two'); ?></h1>
								</div>
								<div data-swiper-parallax="400" class="slide-text">
									<p><?= get_sub_field('description'); ?></p>
								</div>
								<div class="clearfix"></div>
								<div data-swiper-parallax="500" class="slide-btns">
									<a href="#" class="theme-btn-s2"><?= get_sub_field('button_text'); ?> <i class="fa-solid fa-arrow-right-long"></i></a>
								</div>
							</div>
						</div>
						<!-- end slide-inner -->
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<!-- end swiper-slide -->


				<!-- end swiper-slide -->
			</div>
			<!-- end swiper-wrapper -->

			<!-- swipper controls -->
			<!-- <div class="swiper-pagination"></div> -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</section>
	<!-- end of hero slider -->
</section>
<!--   Banner area End-->
<!--   Who-we-are area Start-->
<section class="who-area pt-110 pb-120">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="who-left animate__animated animate__fadeInLeft">
					<h6 class="color-blue"><?= the_field('who_we_title'); ?></h6>
					<h2><?= the_field('who_we_sub_title_'); ?></h2>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="who-right animate__animated animate__fadeInRight">
					<p><?= the_field('who_we_description'); ?></p>
				</div>
			</div>
		</div>
		<div class="row">

			<?php while (have_rows('who_we_sub')) : the_row(); ?>
				<div class="col-md-3 col-xs-6">
					<div class="who-item text-center animate__animated animate__slideInUp animation-duration: 5s;">
						<i class="fa-solid <?= get_sub_field('icon'); ?>"></i>
						<h4><?= get_sub_field('title'); ?></h4>
						<p><?= get_sub_field('description'); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		</div>
	</div>
	<div class="who-shape-1">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/what-we-are-shape-1.png" alt="">
	</div>
	<div class="who-shape-2">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/what-we-are-shape-2.png" alt="">
	</div>
</section>
<!--   Who-we-are area End-->
<!--   Solution area Start-->
<section class="solution-area ">
	<div class="solution-color pt-110">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="solution-content">
						<h2 class="color-white"><?= the_field('get_better_title'); ?></h2>
						<p class="color-white"><?= the_field('get_better_description'); ?></p>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
</section>
<!--   Solution area End-->
<!--   Services area Start-->
<section-services-area>
	<div class="services-title text-center pt-110">
		<div class="ring-shape"></div>
		<h6 class="color-white"><?= the_field('our_services_title'); ?></h6>
		<h2 class="color-white title-offfer"><?= the_field('our_services_sub_title_'); ?></h2>
	</div>
	<div class="container">
		<div class="row services-item">

			<?php while (have_rows('our_services_sub')) : the_row(); ?>
				<div class="col-md-4 mb-55">
					<div class="animate__animated animate__slideInUp">
						<img src="<?= get_sub_field('image'); ?>" class="card-img-top" alt="...">
						<div class="text-left">
							<h4 class="card-title"><?= get_sub_field('title'); ?></h4>
							<p class="card-text"><?= get_sub_field('description'); ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		</div>
	</div>
</section-services-area>
<!--   Services area End-->
<!--   Why-choose area Start-->
<section class="why-choose-area">
	<div class="container">
		<div class="why-choose-content text-center">
			<h6 class="color-white"><?= the_field('why_choose_one'); ?></h6>
			<h2 class="color-white"><?= the_field('why_choose_two'); ?></h2>
		</div>
		<div class="row">
			<?php while (have_rows('why_choose_sub')) : the_row(); ?>
				<div class="col-md-4">
					<div class="why-choose-item text-center">
						<div class="why-icon my-5">
							<span class="why-icon-span"></span>
							<i class="fa-regular <?= get_sub_field('icon'); ?>"></i>
						</div>
						<h4 class="color-white"><?= get_sub_field('title'); ?></h4>
						<p class="color-white"><?= get_sub_field('description'); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			
		</div>
	</div>
	<div class="choose-dot">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/choose-dot.png" alt="">
	</div>
	<div class="choose-shape">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/choose-shape.png" alt="">
	</div>
</section>
<!--   Why-choose area End-->
<!--   Our-solutions area Start-->
<section class="our-solutions-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="our-left">
					<h2 class="color-blue"><?= the_field('our_solutions_title'); ?></h2>
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
									<i class="fa-solid fa-arrow-right-long"></i> We Provide Professional Service
								</button>
							</h2>
							<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">Placeholder content for this accordion, which is
									intended to demonstrate the <code>.accordion-flush</code> class. This is the
									first item's accordion body.</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
									<i class="fa-solid fa-arrow-right-long"></i> Stay Up, Stay Running & Protected
								</button>
							</h2>
							<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">Placeholder content for this accordion, which is
									intended to demonstrate the <code>.accordion-flush</code> class. This is the
									second item's accordion body. Let's imagine this being filled with some actual
									content.</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
									<i class="fa-solid fa-arrow-right-long"></i> Our Experienced Experts
								</button>
							</h2>
							<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">Placeholder content for this accordion, which is
									intended to demonstrate the <code>.accordion-flush</code> class. This is the
									third item's accordion body. Nothing more exciting happening here in terms of
									content, but just filling up the space to make it look, at least at first
									glance, a bit more representative of how this would look in a real-world
									application.</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
									<i class="fa-solid fa-arrow-right-long"></i> Our Experienced Experts
								</button>
							</h2>
							<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">Placeholder content for this accordion, which is
									intended to demonstrate the <code>.accordion-flush</code> class. This is the
									third item's accordion body. Nothing more exciting happening here in terms of
									content, but just filling up the space to make it look, at least at first
									glance, a bit more representative of how this would look in a real-world
									application.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="our-right">
					<img src="<?= the_field('our_solutions_image'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!--   Our-solutions area End-->
<?php get_footer() ?>