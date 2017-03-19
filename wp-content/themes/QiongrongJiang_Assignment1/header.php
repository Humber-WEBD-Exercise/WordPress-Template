<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
	<header class="main-header">
		<h1>
			<?php  
				echo get_bloginfo('name');
			?>
		</h1>
		<nav>
			<?php  
				// output menu markup
				wp_nav_menu(array(
					'theme_location' => 'main-menu'
				));
			?>
		</nav>
	</header>
	