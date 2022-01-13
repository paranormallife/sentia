<?php
    echo '<div class="comment-form-container">'.comment_form().'</div>';
    echo '<div class="comments">';
        if (have_comments()) {
            echo '<ol class="post-comments">';
                wp_list_comments(array(
                        'style'       => 'ol',
                        'short_ping'  => true,
                    ));
            echo '</ol>';
        }
    echo '</div>';
?>