<!-- This file is resposible for single posts -->

<?php get_header(); ?>

		<article class="content px-3 py-5 p-md-5">
      <?php
        if(have_posts() ){
          while(have_posts() ){
            the_post();
            // First parameter is the path, second is the type
            get_template_part('template-parts/content', 'article');
          }
        }
      ?>
	  </article>

<?php get_footer(); ?>