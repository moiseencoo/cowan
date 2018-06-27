<?php get_header(); the_post(); $color = get_field('banner_text_color'); ?>
	<div class="v2-content">
		<main class="b-content">
			<div class="main-slider-out ">
				<div class="main-slider owl-carousel snpr-slide">
					<div class="item hb100 bg_cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
						<div class="container hb100 rel-b">
							<div class="main-slider-info">
								<h2 style="color: <?php echo $color; ?> !important;">
									<?php the_title(); ?> 
									<span><?php the_field('city'); ?></span>
								</h2>
							</div>
						</div>
					</div>
<!-- 				<div class="item hb100 bg_cover" style="background-image: url(img/sp02.jpg);">
						<div class="container hb100 rel-b">
							<div class="main-slider-info">
								<h2>Academy High School  <span>Manchester</span></h2>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<div class="container">
				<div class="row float-art-th-line ob-project-row justify-content-between">
					<div class="col-lg-6 mt35t">
						<article class="art-th-line">
							<h3>About project</h3>
							<?php the_content(); ?>
						</article>
					</div>
					<div class="col-lg-5 mt70-40">
						<div class="tac">
							<img src="<?php $img = get_field('image_to_the_right'); echo $img['sizes']['project-about-img']; ?>" alt="">
						</div>
						<article class="art-th-line">
							<?php the_field('services_used'); ?>
						</article>						
					</div>
				</div>
				<div class="row b-20">
				<?php if( have_rows('two_small_images') ): ?>			
				  <?php  while ( have_rows('two_small_images') ) : the_row(); ?>
				  	<div class="col-md-6 b20">
				  		<div class="tac">
				  			<img src="<?php $img = get_sub_field('image_small_project'); echo $img['sizes']['project-about-img']; ?>" alt="">
				  		</div>
				  	</div>
				  <?php endwhile; ?>			
				<?php endif; ?>
				</div>
<!-- 				<?php //if($testim = get_field('testimonial')) : ?>
				<blockquote class="bq-info">
					<p><?php// echo $testim; ?> </p>

					<a href="#">Clients glowing feedback</a>
				</blockquote>
				<?php// endif; ?> -->
				
				<?php if( have_rows('big_images_projct') ): ?>			
				  <?php  while ( have_rows('big_images_projct') ) : the_row(); ?>				     
					<div class="tac b30">
						<img src="<?php $img = get_sub_field('image_big_images_project'); echo $img['sizes']['full-width']; ?>" alt="">
					</div>
				  <?php endwhile; ?>			
				<?php endif; ?>

			</div>
			<?php if($next_id = get_adjacent_post(0, '', 1, 'portfolio_category')->ID): ?>
				<div class="next-pr-out">
					<div class="container">
						<a href="<?php echo get_permalink($next_id); ?>">View next project</a>
					</div>
				</div>
			<?php endif; ?>
		</main>
	</div>
<?php get_footer(); ?>