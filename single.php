<?php get_header(); the_post();  ?>

<div class="v2-content">
	<main class="b-content">
	<header class="b-content-head">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</header>

	

	<div class="container">
		<?php the_content(); ?>
	</div>

	</main>
</div>

<?php get_footer(); ?>