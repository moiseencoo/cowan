<?php 
/*Template name:Portfolio page*/
?>
<?php get_header();if(have_posts())while(have_posts())the_post();?>

	<main class="b-content">
	<div class="filter-b">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-md-auto col-12">
					<div class="filter-title">Portfolio</div>
				</div>
				<div class="col-md-auto col-12">
					<div class="row justify-content-between align-items-center">
						
						<div class="col-12">
							<div class="row justify-content-center align-items-center filter-links filters-button-group button-group">
								<?php
								$taxonomy = 'portfolio_category';
								$terms = get_terms(array(
									'taxonomy' => $taxonomy,
									'hide_empty' => true,
									'number' => 0,
								));
								foreach ($terms as $key => $term) : ?>
									<div class="col-sm-auto col-6 filter-link">
										<a href="#" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row b-20 works-filter-area">
			<?php 
			$query = new WP_Query(array(
				'post_type' 	=> 'projects',
				'post_per_page' => -1,
			));
			if($query->have_posts()): while($query->have_posts()): $query->the_post(); ?>
				<?php 
					$cats = wp_get_post_terms($post->ID, $taxonomy);
					$slug = '';
					$i = 0;
					foreach ($cats as $key => $cat) {
						$i++;
						$separator = ' ';
						if($i == count($cats)) $separator = '';
						$slug .= $cat->slug.$separator;
					}
				?>
				<div class="col-md-6 b20 works-filter-item <?php echo $slug; ?>">
					<a href="<?php echo get_permalink(); ?>" class="pr-filter-v">
						<img src="<?php echo get_the_post_thumbnail_url(null, 'project-small-img'); ?>" alt="">
						<div class="pr-filter-v-info">
							<?php the_title(); ?>
						</div>
					</a>
				</div>
			<?php endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>
</main>

<?php get_footer();?>