<?php 
/*Template name:Front page Alternative*/
?>

<?php get_header();if(have_posts())while(have_posts())the_post();?>
<?php $featured_projects = get_field('featured_projects_home1'); ?>

<main class="b-content">
	<div class="main-slider-out-alt">
		<div class="main-slider-3 owl-carousel">
		<?php $slider_icons = get_field('slider_icons'); ?>
		<?php if( have_rows('slider') ): ?>
		
		  <?php  while ( have_rows('slider') ) : the_row(); ?>
		     <div class="item hb100 bg_cover" style="background-image: url(<?php $img = get_sub_field('image_bg_slider'); echo $img['sizes']['full-width']; ?>);">
		     	<div class="container hb100 rel-b">
		     		<div class="blue-info-alt">
		     			<div class="row b-20 ">
		     				<?php foreach($slider_icons as $slider_icon): ?>
			     				<div class="col-md-4 col-sm-6 b20">
			     					<a href="<?php echo get_permalink($slider_icon['page']->ID); ?>" class="sl-serv">
			     						<table>
			     							<tr>
			     								<td><img src="<?php echo $slider_icon['icon']['sizes']['icon']; ?>" alt=""></td>
			     								<td><?php echo $slider_icon['title']; ?></td>
			     							</tr>
			     						</table>
			     					</a>
			     				</div>
			     			<?php endforeach; ?>
		     			</div>
		     		</div>
		     	</div>
		     </div>
		  <?php endwhile; ?>
		
		<?php else : ?>
		
		
		<?php endif; ?>
		</div>
	</div>
	<div class="news-box-alt">
		<div class="container">
			<h3>News</h3>
			<div class="row justify-content-center">
				<?php if ( have_rows('featured_news_home') ) : while ( have_rows('featured_news_home') ) : the_row(); $news = get_sub_field('news'); ?>
				<div class="news-alt-elem">
					<h4><?php echo get_the_title($news->ID); ?></h4>
					<p><?php echo get_the_excerpt($news->ID); ?></p>
					<a href="<?php echo get_permalink($news->ID); ?>">Read More</a>
				</div>

				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
	
	<div class="container mm55">
		<div class="row b-20 justify-content-end">
			<div class="col-md-6 b20">
				<figure class="list prev-i-elem">
				<img src="<?php $img1 = get_field('image_one_project'); echo $img1['sizes']['landscape']; ?>" />
				<?php //echo get_the_post_thumbnail($featured_projects[0]['project']->ID, 'feat-project2'); ?>
<!-- 				<figcaption><?php// echo $featured_projects[0]['project']->post_title; ?></figcaption> -->
				</figure>
			</div>
			<div class="col-md-6 b20  mt40">
				<figure class="list prev-i-elem">
				<img src="<?php $img2 = get_field('image_two_project'); echo $img2['sizes']['landscape']; ?>" />
				<?php //echo get_the_post_thumbnail($featured_projects[1]['project']->ID, 'feat-project2'); ?>
<!-- 				<figcaption><?php //echo $featured_projects[1]['project']->post_title; ?></figcaption> -->
				</figure>
			</div>
		</div>
	</div>
	<div class="brown-area ba-alt">
		<div class="container">
			<h4><?php the_field('title_services'); ?></h4>
			<div class="row justify-content-center">
				<?php if( have_rows('icons_services') ): ?>				
				  <?php  while ( have_rows('icons_services') ) : the_row(); ?>
				     <div class="col-lg-2 col-md-3 col-sm-4 col-6">
					 	<a href="<?php echo get_permalink(get_sub_field('page')->ID); ?>" class="serv-list-elem">
					 		<span class="serv-list-elem-pic"><img src="<?php $img = get_sub_field('icon'); echo $img['sizes']['icon']; ?>" alt=""></span>
					 		<span class="serv-list-elem-name"><?php the_sub_field('title'); ?></span>
					 	</a>
					 </div>
				  <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="container mini-ab-us">
		<div class="row float-art-th-line align-items-center">
			<div class="col-md-6 no-pad">
				<article class="art-th-line">
					<?php the_content(); ?>
				</article>
			</div>
			<div class="col-md-6 no-pad">
				<div class="tal">
					<img src="<?php $img = get_field('about_us_image'); echo $img['sizes']['project-small-img']; ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="grunds-b">
		<div class="container">
			<div class="row align-items-center tac b-20">
				<div class="col-md-4 b20"><h3><?php the_field('info_block_title_home1'); ?></h3></div>
				<div class="col-md-8 b20">
					<?php the_field('info_block_text_home1'); ?>
					<a href="<?php the_field('info_block_link_home1'); ?>" class="btn-white">Read More</a>
				</div>
			</div>
		</div>
	</div>
	<div class="tac">
		<a href="<?php the_field('bottom_button_url_home1'); ?>" class="red-btn"><?php the_field('bottom_button_text_home1'); ?></a>
	</div>
</main>

<?php get_footer();?>