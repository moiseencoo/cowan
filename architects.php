<?php 
/*Template name:Architects page*/
?>
<?php get_header();if(have_posts())while(have_posts())the_post();?>


<main class="b-content">
	<header class="b-content-head bg_cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		<div class="container">
			<h1><?php the_title(); ?>	</h1>
		</div>
	</header>
	<div class="container content-info">
		<div class="ahead-article">
			<?php the_content(); ?>
		</div>
		<div class="b-60">

		<?php if( have_rows('architects') ): ?>	
		 <?php $counter = 1; ?>		
		  <?php  while ( have_rows('architects') ) : the_row(); ?>
		     <div class="row <?php if($counter%2 == 0) echo 'justify-content-end'; ?>">
		     	<div class="col-lg-5 col-sm-5 align-self-start b60">
		     		<img src="<?php $img = get_sub_field('image_architects'); echo $img['sizes']['project-about-img']; ?>" alt="">
		     	</div>
		     	<div class="col-lg-5 col-sm-6 align-self-end about-elem-info b60">
		     		<h4><?php the_sub_field('name_architects'); ?></h4>
		     		<strong><?php the_sub_field('position_architects'); ?></strong>
		     		<?php the_sub_field('description_architects'); ?>
		     	</div>
		     </div>		
		  <?php $counter++; endwhile; ?>			
		<?php endif; ?>

			
		</div>
	</div>
</main>


<?php get_footer();?>