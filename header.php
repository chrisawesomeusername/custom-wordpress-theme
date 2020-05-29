<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">

    <?php wp_head(); ?>

</head>

<body>
  <header class="header bg-dark text-center pb-0">
    <h2><a class="site-title mt-5 text-white" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h2>
    <p><?php echo get_bloginfo('description'); ?></p>

    <nav class="navbar navbar-expand-lg navbar-dark" >

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
  			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column text-light" >
        <?php if (function_exists('the_custom_logo')) {
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);

        } ?>
				<img class="mb-4 mt-0 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >


        <div class="border-top border-bottom p-4">
          <?php
            wp_nav_menu(
              array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="headerMenu" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
              )
            );
          ?>

        </div>

			</div>

		</nav>
  </header>
  <div class="main-wrapper">
    <header class="page-title border-bottom text-center py-5">
      <h1 class="heading"><?php the_title(); ?></h1>
    </header>
