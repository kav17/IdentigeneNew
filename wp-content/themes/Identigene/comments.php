<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Tiamo
 * @since Tiamo 1.0
 */


?>

<?php if (comments_open()) { ?>  
    <?php if (get_comments_number() == 0) { ?>
      <ul class="list">
        <li>Оставьте первый отзыв</li>
      </ul>
    <?php } else { ?>
    <ul id="prod-comment" class="commentlist">
      <?php
        function Vagiton_fran_comment($comment, $args, $depth){
          $GLOBALS['comment'] = $comment; ?>
          <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>">
              <div class="comment-author vcard">                
                
                <?php printf(__('<cite class="fn">%s</cite> <span class="says"></span>'), get_comment_author_link()) ?>
                <div class="comment-meta commentmetadata">
                  <span><?php printf(__('%1$s'), get_comment_date()) ?></span>
                </div>
              </div>
              <?php if ($comment->comment_approved == '0') : ?>
                <em><?php _e('Ваш отзыв ожидает модерации.') ?></em>
                <br>
              <?php endif; ?>
              <?php comment_text() ?>              
            </div>
      <?php }
        $args = array(
          'reply_text' => '',
          'callback' => 'Tiamo_comment'
        );
        wp_list_comments($args);
      ?>
    </ul>       <hr>
  <?php } ?>
 
  <?php
    $fields = array(
      'author' => '<p class="comment-form-author"><label for="author">' . __( 'Ваше имя:' ) . ($req ? '<span class="required">*</span>' : '') . '</label><input type="text" id="author" name="author" class="author" value="""' . esc_attr($commenter['comment_author']) . '" placeholder="" pattern="[A-Za-zА-Яа-я]{3,}" maxlength="40" autocomplete="on" tabindex="1" required' . $aria_req . '></p>'
      
    );
 
    $args = array(
      'comment_notes_after' => '',
      'email' =>
    '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
    ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' /></p>',
      'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Текст отзыва:', 'noun' ) . '</label><textarea id="comment" name="comment" class="comment-form" cols="85" rows="8" aria-required="true" placeholder=""></textarea></p>',
      'label_submit' => 'Оставить отзыв',
      'fields' => apply_filters('comment_form_default_fields', $fields)
    );
    comment_form($args);
  ?>
  <?php } else { ?>
  <h3>Обсуждения закрыты для данной страницы</h3>
  <?php }
?>