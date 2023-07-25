<?php


// output the accordion
function the_accordions() {

    // accordion intro
    $intro = get_sub_field( 'intro' );

    // check if the nested repeater field has rows of data
    if( have_rows('accordion') ):
        ?>
        <div class="accordions">
            <?php print ( !empty( $intro ) ? '<div class="accordions-intro">' . $intro . '</div>' : '' ); ?>
            <div class="accordions-inner">

        <?php
        // loop through the rows of data
        while ( have_rows('accordion') ) : the_row();

            $header = get_sub_field('header');
            $content = get_sub_field('content');
            $open = get_sub_field('open');
            print '<div class="accordion ' . ( $open ? 'open' : '' ) . '">
                <div class="accordion-title">' . $header . '</div>
                <div class="accordion-content">' . $content . '</div>
            </div>';

        endwhile;
        ?>
            </div>
        </div>
        <?php
    endif;
    
}


