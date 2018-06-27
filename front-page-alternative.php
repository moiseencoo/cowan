<?php 
/*Template name:Front page*/
?>
<?php get_header();if(have_posts())while(have_posts())the_post();?>
<?php $featured_projects = get_field('featured_projects_home1'); ?>
		<main class="b-content">
			<div class="main-slider-out">
				<div class="main-slider owl-carousel">

				<?php 
					$args = array( 'posts_per_page' => 4, 'post_type'=>'projects' );
					$loop = new WP_Query( $args );


					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="item hb100 bg_cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
						<div class="container hb100 rel-b">
							<div class="main-slider-info">
								<h2><?php the_title(); ?> <span><?php the_field('city'); ?></span></h2>

								<a href="<?php echo get_permalink(); ?>" class="btn-white">View Project</a>
							</div>
						</div>
					</div>

					<?php endwhile; ?>
					<?php endif; wp_reset_postdata(); ?>
					
				</div>
				<div class="main-slider-pag"></div>
			</div>
			
			<div class="container content-info">
				<div class="row b-20 justify-content-end">
					<div class="col-md-5 b20">
						<figure class="list image-to-top prev-i-elem">
							<?php echo get_the_post_thumbnail($featured_projects[0]['project']->ID, 'feat-project1'); ?>
							<figcaption><?php echo $featured_projects[0]['project']->post_title; ?></figcaption>
						</figure>
					</div>
					<div class="col-md-6 b20">
					<?php 
						$args = array( 'posts_per_page' => 1,'post_type'=>'post' );
						$loop = new WP_Query( $args );

						if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="blue-content bl-01">
							<h3><?php the_title(); ?></h3>
							<a href="<?php echo get_permalink(); ?>" class="btn-white">Read More</a>
						</div>

						<?php endwhile; ?>
						<?php endif; wp_reset_postdata(); ?>

					</div>
				</div>

				<div class="row b-20 justify-content-end">
					<div class="col-md-6 b20">
						<article class="sm-article">
							<?php the_content(); ?>
						</article>
					</div>
					<div class="col-md-5 b20 offset-md-1">
						<figure class="list image-to-top2 prev-i-elem">
							<?php echo get_the_post_thumbnail($featured_projects[1]['project']->ID, 'feat-project2'); ?>
							<figcaption><?php echo $featured_projects[1]['project']->post_title; ?></figcaption>
						</figure>
					</div>
				</div>

				<div class="row b-20 justify-content-end pr-last-prev">
					<div class="col-md-6 b20">
						<figure class="list prev-i-elem">
							<?php echo get_the_post_thumbnail($featured_projects[2]['project']->ID, 'project-small-img'); ?>
							<figcaption><?php echo $featured_projects[2]['project']->post_title; ?></figcaption>
						</figure>
					</div>
					<div class="col-md-5 b20 offset-md-1">
						<div class="blue-content">
							<h3><?php the_field('info_block_title_home1'); ?></h3>
							<?php the_field('info_block_text_home1'); ?>
							<a href="<?php the_field('info_block_link_home1'); ?>" class="btn-white">Read More</a>
						</div>
					</div>
				</div>

				<div class="tac">
					<a href="<?php the_field('bottom_button_url_home1'); ?>" class="blue-btn"><?php the_field('bottom_button_text_home1'); ?></a>
				</div>
			</div>
		</main>

<?php get_footer();?>