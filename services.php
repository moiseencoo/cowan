<?php 
/*Template name:Services page*/
?>
<?php get_header();if(have_posts())while(have_posts())the_post();?>

<div class="v2-content">
<main class="b-content">
	<header class="b-content-head">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</header>
	<div class="container content-info">
		<div class="ahead-article">
			<?php the_content(); ?>
		</div>
		<div class="float-art-th-line-out">

		<?php if( have_rows('services_repeater') ): ?>
		  <?php $count = 0; ?>
		  <?php  while ( have_rows('services_repeater') ) : the_row(); ?>
		  

		 	<div class="row float-art-th-line">
		 		<div class="<?php if($count%2 == 0) echo 'col-lg-7 order-lg-2 fl-2'; else echo 'col-lg-7 fl-1'; ?>">
		 			<article class="art-th-line">
		 				<h3><?php the_sub_field('title_service'); ?></h3>
		 				<?php the_sub_field('description_service'); ?>
		 			</article>
		 		</div>
		 		<div class="<?php if($count%2 == 0) echo 'col-lg-5 order-lg-1'; else echo 'col-lg-7;'; ?>">
		 			<div class="tac">
		 				<img src="<?php $img = get_sub_field('image_service'); echo $img['sizes']['service-img']; ?>" alt="">
		 			</div>
		 		</div>
		 	</div>
		     
		  <?php $count++; endwhile; ?>		
		
		<?php endif; ?>

		</div>
	</div>
	<div class="brown-area">
		<div class="container">
			<div class="row">
				<?php if( have_rows('red_section_repeater') ): ?>
				
				  <?php  while ( have_rows('red_section_repeater') ) : the_row(); ?>
				     <div class="col-md-6">
				     	<article class="art-th-line">
				     		<h3><?php the_sub_field('title_red_section'); ?></h3>
				     		<?php the_sub_field('description_red_section'); ?>
				     	</article>
				     </div>
				  <?php endwhile; ?>
				
				<?php endif; ?>
				
			</div>
			<div class="tac">
				<a href="<?php the_field('button_url_red_section'); ?>" class="blue-btn"><?php the_field('button_red_section'); ?></a>
			</div>
		</div>
	</div>
</main>	
</div>


<?php get_footer();?>