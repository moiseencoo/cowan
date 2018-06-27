<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>
	<meta name="description" content="">
	<meta content="telephone=no" name="format-detection">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta content="telephone=no" name="format-detection">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
<!-- 	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css"> -->

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#fff">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#fff">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#fff">

<!-- 	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style> -->
<?php wp_head();?>
</head>

<?php 
	$portfolio = is_page_template('portfolio.php') ? ' no-float-header' : ''; //v2-content
	$content = (is_page_template('portfolio.php') || is_page_template('about.php') || is_page_template('services.php') || is_page_template('contact.php') || is_singular('projects') || !is_page_template()) ? 'v2-content ' : '';
?>
<body <?php body_class($content.$portfolio);?> >
	<nav class="b-header-nav-mb">
		<?php
			wp_nav_menu( array(
				// 'menu'    =>  'main-menu',
				'theme_location'    => 'main-menu',
			)); 
		?>
	</nav>
	<div class="wrap">
		<?php 
		$header_bg=get_field('header_background');
			?>
			<?php if($header_bg=='Blue'):?>
		<header class="b-header">
			<div class="container-fluid">
				<div class="row align-items-end justify-content-between b-30">
					<div class="col-md-4 b30 logo-out">
						<div class="b-header-logo">
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""><span class="sub-logo-text"><?php the_field('logo_text', 'option'); ?></span></a>
						</div>
						<div class="b-header-logo-mb">
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-mb.svg" alt=""></a>
						</div>
					</div>
					<div class="col-md-8 b30">
						<button type="button" class="mb-btn menubtnJs">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<nav class="b-header-nav">
							<?php
								wp_nav_menu( array(
									// 'menu'    =>  'main-menu',
									'theme_location'    => 'main-menu',
								)); 
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>
	<?php elseif($header_bg=='White'):?>
		<header class="b-header white">
			<div class="container-fluid">
				<div class="row align-items-end justify-content-between b-30">
					<div class="col-md-4 b30 logo-out">
						<div class="b-header-logo">
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/altLogo.svg" alt=""><span class="sub-logo-text"><?php the_field('logo_text', 'option'); ?></span></a>
						</div>
						<div class="b-header-logo-mb">
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-mb.svg" alt=""></a>
						</div>
					</div>
					<div class="col-md-8 b30">
						<button type="button" class="mb-btn menubtnJs">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<nav class="b-header-nav">
							<?php
								wp_nav_menu( array(
									// 'menu'    =>  'main-menu',
									'theme_location'    => 'main-menu',
								)); 
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>
<?php else:?>
			<header class="b-header">
			<div class="container">
				<div class="row align-items-end justify-content-between b-30">
					<div class="col-md-4 b30 logo-out">
						<div class="b-header-logo">
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""><span class="sub-logo-text"><?php the_field('logo_text', 'option'); ?></span></a>
						</div>
						<div class="b-header-logo-mb">
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-mb.svg" alt=""></a>
						</div>
					</div>
					<div class="col-md-8 b30">
						<button type="button" class="mb-btn menubtnJs">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<nav class="b-header-nav">
							<?php
								wp_nav_menu( array(
									// 'menu'    =>  'main-menu',
									'theme_location'    => 'main-menu',
								)); 
							?>
						</nav>
					</div>
				</div>
			</div>
		</header>
	<?php endif;?>