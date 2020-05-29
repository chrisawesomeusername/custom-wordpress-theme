<div class="comments-wrapper">


  <div class="comments" id="comments">


    <div class="comments-header">

      <h2 class="comment-reply-title mt-5">
        <?php
          if(! have_comments()){
            echo "Leave a Comment";
          }
          else{
            echo get_comments_number(). "Comments";
          }
        ?>
      </h2><!-- .comments-title -->

    </div><!-- .comments-header -->

    <div class="comments-inner">
      <ol>
        <?php wp_list_comments("callback=mytheme_comment"); ?>
      </ol>


    </div><!-- .comments-inner -->

  </div><!-- comments -->

  <hr class="" aria-hidden="true">
  <div class="">
    <?php
      if (comments_open()) {
        comment_form(
          array(
            'class_form' => '',
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_replyy_after'  => '</h2>'
          )
        );
      }
    ?>
  </div>
</div>
