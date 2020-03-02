<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header">

			<nav class="white black-text">

				<div class="nav-wrapper">

					<a href="<?php echo home_url(); ?>"  class="black-text">
						<img id="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/logo.svg" alt="<?php echo get_bloginfo( 'name' ); ?>" />
					</a>
					<form>
						<div class="input-field">
							<input id="search" type="search" required>
							<label class="label-icon" for="search"><i class="material-icons">search</i></label>
							<i class="material-icons">close</i>
						</div>
					</form>
					<ul id="nav-mobile" class="right hide-on-med-and-down black-text">

						<li><a class="teal-text text-darken-3" href="sass.html">Sass</a></li>

						<li><a class="teal-text text-darken-3" href="badges.html">Components</a></li>

						<li><a class="teal-text text-darken-3" href="collapsible.html">JavaScript</a></li>

					</ul>

				</div>

			</nav>

		</header><!-- #site-header -->

		<?php