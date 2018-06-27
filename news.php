<?php 
/*Template name:News page*/
?>
<?php get_header();if(have_posts())while(have_posts())the_post();?>
	<main class="b-content">
	<header class="b-content-head bg_cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</header>
	<div class="container">
		<div class="row news-area b-70">


		<?php 
			$args = array( 'posts_per_page' => 9,'post_type'=>'post' );
			$loop = new WP_Query( $args );


			if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="col-lg-4 col-sm-6 b70">
				<a href="#" class="news-elem">
					<div class="news-elem-img">
						<a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'post-img'); ?>" alt=""></a>
					</div>
					<div class="news-elem-name"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
					<div class="news-elem-tag">
						<?php $cats = wp_get_post_categories($post->ID); $i = 0; foreach($cats as $cat): $i++;?>
							<!-- <a href="<?php //echo get_category_link($cat); ?>"><?php //echo get_cat_name($cat); ?></a> -->
							<?php echo get_cat_name($cat); ?>
							<?php 
								if($i != count($cats)){
									echo ',';
								} 
							?>
						<?php endforeach; ?>
					</div>
				</a>
			</div>

			<?php endwhile; ?>
				</div>
				<div class="tar b70">
				  <?php if($next_link = get_next_posts_link( 'Previous Posts', $loop->max_num_pages )): ?>
					<div class="blue-btn"><?php echo $next_link; ?></div>
				   <?php endif; ?>
					<!-- <div class="blue-btn"><?php //previous_posts_link( 'Next Posts' ); ?></div> -->
				</div>
			<?php endif; wp_reset_postdata(); ?>

			

	</div>
</main>




<?php get_footer();?>