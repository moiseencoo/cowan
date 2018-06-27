<?php 
/*Template name:Condition Fund page*/
?>
<?php get_header();if(have_posts())while(have_posts())the_post();?>
<main class="b-content">
	<div class="main-slider-out">
		<div class="main-slider-2 owl-carousel">
			<?php if( have_rows('featured_projects') ): ?>
		  	<?php  while ( have_rows('featured_projects') ) : the_row(); ?>
	    		<?php  $project = get_sub_field('project'); ?>

				<div class="item hb100 bg_cover" style="background-image: url(<?php echo get_the_post_thumbnail_url($project->ID); ?>);">
					<div class="container hb100 rel-b">
						<div class="blue-info">
							<div class="blue-info-inner">
								<h2><?php echo get_the_title($project->ID); ?></h2>
								<p><?php echo get_the_excerpt($project->ID); ?></p>
								<a href="<?php echo get_permalink($project->ID); ?>" class="btn-white">View Project</a>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="container">
		<div class="steps-out">
			<?php the_content(); ?>
		</div>

		<div class="steps-guide">
			<h3><?php the_field('title_guide_cif'); ?></h3>
			<div class="row b-20 justify-content-center">

				<?php if( have_rows('guide_to_cif_repeater') ): ?>			
				  <?php  while ( have_rows('guide_to_cif_repeater') ) : the_row(); ?>
				     
					<div class="col-md-4 col-sm-6 b20">
						<div class="step-guide">
							<div class="step-guide-i"><img src="<?php $img = get_sub_field('icon_cif'); echo $img['sizes']['icon']; ?>" alt=""></div>
							<div class="step-guide-name"><?php the_sub_field('title_cif'); ?></div>
						</div>
					</div>

				  <?php endwhile; ?>			
				<?php endif; ?>

			</div>			
		</div>


		<div class="request-out nobg">
				<div class="row float-art-th-line">
					<div class="col-lg-6">
						<article class="art-th-line">
							<h3><?php the_field('title_form_fund'); ?></h3>
							<?php the_field('description_form_fund'); ?>
						</article>
					</div>
					<div class="col-lg-6">
						<?php the_field('form_shorcode_fund'); ?>
					</div>
				</div>
		</div>
	</div>
</main>


<?php get_footer();?>