<div class="comments">
   <h2>comments</h2>
    <?php
    $args = array(
        'walker'       => null,
        'max_depth'    => '',
        'style'        => 'ul',
        'callback'     => null,
        'end-callback' => null,
        'type'         =>'all',
        'reply_text'   => 'Reply',
        'page'         => '',
        'per_page'     => '',
        'avatar_size'  => 80,
        'reverse_top_level' => null,
        'reverse_children'  =>'',
        'format'            =>'html5',
        'short_ping'        => false,
        'echo'              => true,
    );
    wp_list_comments($args);

    $form_args=array(
        'label_submit'  => 'Send',
        'title_reply'   => 'Write a Reply or Comment',
        'comment_notes_after' => '',
        'comment_field'       => '<p class="comment-form-comment">
        <label for="comment">'._x('comment', 'noun').'</label><br />
        <textarea id="comment" name="comment" cols="45" rows="8" area-required="true"></textarea>
        </p>',
    );
    comment_form($form_args);
    ?>
</div>