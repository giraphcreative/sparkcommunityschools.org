<?php


// output the icons
function the_icons() {

    // check if the nested repeater field has rows of data
    if( have_rows('icon') ):
        
        print '<div class="icons ' . $color . ( !empty( $classes ) ? ' ' . $classes : '' ) . '">';

        // loop through the rows of data
        while ( have_rows('icon') ) : the_row();

            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $link = get_sub_field('link');
            echo ( !empty( $link ) ? '<a href="' . $link . '">' : '' ) . '<div class="icon"><div class="icon-container"><img src="' . $icon . '" /></div><h4>' . $title . '</h4></div>' . ( !empty( $link ) ? '</a>' : '' );

        endwhile;

        print '</div>';

    endif;
    
}


