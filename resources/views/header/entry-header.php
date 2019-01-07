<?php
/**
 * Displays the post header
 */

if (is_sticky() && is_home() && !is_paged()) {
    printf('<span class="sticky-post">%s</span>', _x('Featured', 'post', 'wpspock'));
}

if (is_singular()) {
    the_title('<h1 class="entry-title">', '</h1>');
} else {
    the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
}

spock()->header()->featureImage();