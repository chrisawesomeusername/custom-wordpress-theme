<div class="container">
  <header class="content-header">
    <div class="d-flex border-bottom justify-content-center meta mb-3">
      <span class="px-3 date"><?php the_date(); ?></span>
      <?php the_tags
      ('<span class=" px-3 tag"><i class="fa fa-tag"></i>','</span>
      <span class="px-3 tag">
        <i class="fa fa-tag"></i>',
      '</span>'); ?>
      <span class="px-3 comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a></span>
    </div>
  </header>

  <?php
    the_content();
  ?>

  <?php
    comments_template();
  ?>
</div>
