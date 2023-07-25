<?php


// output the list
function the_list() {

    $title = get_sub_field( 'title' );

    // check if the nested repeater field has rows of data
    if( have_rows('item') ):
        ?>
        <div class="list">
            <h2 class="list-title"><?php print $title ?></h2>
            <div class="list-inner">
                <ul>
        <?php
        // loop through the rows of data
        while ( have_rows('item') ) : the_row();

            // grab the content for the item and output it
            $content = get_sub_field('content');
            print '<li class="' . get_sub_field('color') . '">' . $content . '</li>';

        endwhile;
        ?>
                </ul>
            </div>
        </div>
        <?php
    endif;
    
}

