<?php 
/*Template name:Contact page*/
?>
<?php get_header();if(have_posts())while(have_posts())the_post();?>

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
	</div>
	<div class="request-out">
		<div class="container">
			<div class="row float-art-th-line">
				<div class="col-lg-6">
					<article class="art-th-line">
						<h3><?php the_field('contact_form_title'); ?></h3>
						<?php the_field('contact_form_text'); ?>
					</article>
				</div>
				<div class="col-lg-6">
					<?php the_field('contact_form_shortcode'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container contact-map">
		<div class="row">
			<div class="col-md-6">
				<div class="contact-map-info">
					<?php the_field('contact_info'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2362.774149196545!2d-2.6744733843565034!3d53.68665055686776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b0d3da29615c1%3A0x61e92283a4599914!2sCowan+%26+Co+Building+Consultancy!5e0!3m2!1sru!2s!4v1512983423307" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</main>	

<?php get_footer();?>