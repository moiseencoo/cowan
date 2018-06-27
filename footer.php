		<footer class="b-footer v2">
			<div class="container">
				<div class="row b-20 f-v2-row">
					<div class="col-md-6 b20">
						<div class="row b-30 row-f-nav">
							<div class="col-sm-6 b30">
								<nav class="b-footer-nav">
								<?php
									wp_nav_menu( array(
										// 'menu'    =>  'main-menu',
										'theme_location'    => 'main-menu',
									)); 
								?>
								</nav>
							</div>
							<div class="col-sm-6 b30">
								<nav class="b-footer-nav">
								<?php
									wp_nav_menu( array(
										// 'menu'    =>  'main-menu',
										'theme_location'    => 'footer-menu',
									)); 
								?>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-md-6 b20">
						<div class="footer-social-out">
							<div class="footer-social">
								<a href="<?php the_field('instagram_link', 'option'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a href="<?php the_field('twitter_link', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</div>
							<div class="footer-adr">
								<?php the_field('footer_contact_text', 'option'); ?>
								<a href="mailto:<?php the_field('footer_email', 'option');?>"><?php the_field('footer_email', 'option');?></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="f-gray">
				<div class="container">
					<div class="footer-copyright">
						<div class="footer-logos row justify-content-center">
						<?php if( have_rows('footer_logos', 'option') ): ?>
						
						  <?php  while ( have_rows('footer_logos', 'option') ) : the_row(); ?>
								<div class="col-sm-auto col-12 align-self-center xs-hidden">
									<a href="<?php the_sub_field('logo_url', 'option'); ?>"><img src="<?php $img = get_sub_field('logo_image', 'option'); echo $img['sizes']['icon']; ?>" alt=""></a>
								</div>

						  <?php endwhile; ?>
						
						<?php endif; ?>
						</div>
						<?php the_field('copyrights', 'option'); ?>
						
					</div>
				</div>
			</div>
		</footer>

<!-- 	<script src="<?php //echo get_template_directory_uri(); ?>/js/scripts.min.js"></script> -->
<?php wp_footer();?>
</div>
</body>
</html>