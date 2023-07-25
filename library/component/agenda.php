<?php


// output the agenda
function the_agenda() {

    // agenda headers
    $header_time = get_sub_field( 'header-time' );
    $header_content = get_sub_field( 'header-content' );

    // check if the nested repeater field has rows of data
    if( have_rows('item') ):
        ?>
        <div class="agenda">
        <?php 
        print ( !empty( $header_time ) && !empty( $header_content ) ? '<div class="item header"><div class="time">' . $header_time . '</div><div class="content">' . $header_content . '</div></div>' : '' );

        // loop through the rows of data
        while ( have_rows('item') ) : the_row();

            $time = get_sub_field('time');
            $content = get_sub_field('content');
            print '<div class="item">
                <div class="time">' . $time . '</div>
                <div class="content">' . $content . '</div>
            </div>';

        endwhile;
        ?>
        </div>
        <?php
    endif;
    
}


