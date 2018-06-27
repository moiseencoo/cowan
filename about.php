<?php 
/*Template name:About US page*/
?>
<?php get_header();if(have_posts())while(have_posts())the_post();?>

<main class="b-content">
	<header class="b-content-head">
		<div class="container">
			<h1>About Us</h1>
		</div>
	</header>
	<div class="container content-info">
		<div class="row">
			<div class="col-lg-6">
				<div class="b-text-two">
					<?php the_field('left_side_text_about'); ?>
				</div>
			</div>
			<div class="col-lg-6">
				<?php the_field('right_side_text_about'); ?>
			</div>
		</div>
	</div>
	<div class="tac mm60">
		<img src="<?php $img = get_field('center_image_about'); echo $img['sizes']['full-width']; ?>" alt="">
	</div>
	<div class="container">
		<div class="row mm60">
			<div class="col-lg-6">
				<?php the_field('left_side_text_2_about'); ?>
			</div>
			<div class="col-lg-6">
				<?php the_field('right_side_text_2_about'); ?>
			</div>
		</div>

		<div class="row b-10 justify-content-center">
			<div class="col-auto b10"><a href="<?php the_field('left_button_link_url_about'); ?>" class="red-btn"><?php the_field('left_button_text_about'); ?></a></div>
			<div class="col-auto b10"><a href="<?php the_field('right_button_link_url_about'); ?>" class="red-btn"><?php the_field('right_button_text_about'); ?></a></div>
		</div>
	</div>
</main>


<?php get_footer();?>
