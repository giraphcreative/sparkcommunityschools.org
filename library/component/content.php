<?php


function the_content_area() {
    $content = get_sub_field('content');
    $theme = get_sub_field('theme');
    if ( !empty( $content ) ){
        ?>
    <div class="content-area <?php print $theme; ?>">
        <?php print $content ?>
    </div>
        <?php
    }
}

