<?php
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */

// Hide author, post date, category and tag text for pages.
if ('post' === get_post_type()) {

    // Posted by and posted on
    spock()->post()->postedBy()->postedOn();

    /* translators: used between list items, there is a space after the comma. */
    $categories_list = get_the_category_list(__(', ', 'wpspock'));
    if ($categories_list) {
        printf(
            '<span class="cat-links">%1$s<span class="screen-reader-text">%2$s</span>%3$s</span>',
            '🏛',
            __('Posted in', 'wpspock'),
            $categories_list
        ); // WPCS: XSS OK.
    }

    /* translators: used between list items, there is a space after the comma. */
    $tags_list = get_the_tag_list('', __(', ', 'wpspock'));
    if ($tags_list) {
        printf(
            '<span class="tags-links">%1$s<span class="screen-reader-text">%2$s </span>%3$s</span>',
            '🥰',
            __('Tags:', 'wpspock'),
            $tags_list
        ); // WPCS: XSS OK.
    }
}

// Comment count.
if (!is_singular()) {
    // Prints HTML with the comment count for the current post.
    if (!post_password_required() && (comments_open() || get_comments_number())) {
        echo '<span class="comments-link">';
        echo '🎭';

        comments_popup_link(sprintf(__('Leave a comment<span class="screen-reader-text"> on %s</span>', 'wpspock'), get_the_title()));

        echo '</span>';
    }
}

// Edit post link.
edit_post_link(
    sprintf(
        wp_kses(
            __('Edit <span class="screen-reader-text">%s</span>', 'wpspock'),
            [
                'span' => [
                    'class' => [],
                ],
            ]
        ),
        get_the_title()
    ),
    '<span class="edit-link">🖋',
    '</span>'
);