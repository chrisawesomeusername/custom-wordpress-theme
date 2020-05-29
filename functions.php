<?php
  function title_theme_support(){
    //this adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'title_theme_support');

  function theme_menus(){
    $locations = array(
      'primary' => "Desktop primary left side bar",
      'footer' => "Footer menu items"
    );
    register_nav_menus($locations);
  }
  add_action('init','theme_menus');


  function register_styles(){

    $version = wp_get_theme()->get ('Version');
    wp_enqueue_style('style-own', get_template_directory_uri() . "/style.css", array('style-bootstrap'), $version, 'all');
    wp_enqueue_style('style-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('style-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
  }
  add_action('wp_enqueue_scripts', 'register_styles');


  function register_scripts(){
    wp_enqueue_script('script-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('script-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('script-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('script-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'register_scripts');

  // function theme_widget_areas(){
  //   register_sidebar(
  //     array(
  //         'before_title' => '<h3>',
  //         'after_title' => '</h3>',
  //         'before_widget' => '',
  //         'after_widget' => ''
  //     ),
  //     array(
  //       'name' => 'Sidebar Area',
  //       'id' => 'sidebar-1',
  //       'description' => 'Sidebar Widget Area'
  //     )
  //   );
  // }
  //
  // add_action('widgets_init', 'theme_widget_areas');

  //customize API

  function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">

       <div class="comment-meta commentmetadata">
           <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
               <?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?>
           </a>
           <?php edit_comment_link(__('(Edit)'),'  ','') ?>
       </div>

       <div class="p-3 row">
        <div class="comment-author vcard col-md-2">
           <?php echo get_avatar($comment,$size='48',$default='' ); ?>

           <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
           <em><?php _e('Your comment is awaiting moderation.') ?></em>
           <br />
        <?php endif; ?>
        <div class="col-md-10">
          <?php comment_text() ?>
        </div>
      </div>


      <div class="reply mb-5">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
    <?php
        }
  require_once get_template_directory() . '/customizer.php';
?>
