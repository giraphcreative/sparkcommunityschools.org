<?php


// output the icons
function the_people() {

    // get the icon background color
    $title = get_sub_field( 'section_title' );
    $color = get_sub_field( 'background_color' );

    // check if the nested repeater field has rows of data
    if( have_rows('person') ):
        
        print '<div class="people ' . $color . '">';
        if ( !empty( $title ) ) print '<h2>' . $title . '</h2>';
        print '<div class="people-inner">';

        // loop through the rows of data
        while ( have_rows('person') ) : the_row();

            $name = get_sub_field('name');
            $title = get_sub_field('title');
            $link = get_sub_field('link');
            print '<div class="person">
                <div class="person-info">
                    <h4>' . $name . '</h4>
                    <p>' . $title . '</p>' .
                    ( !empty( $link ) ? '<a href="' . $link . '" class="btn navy">Read Bio</a>' : '' ) . 
                '</div>
            </div>';

        endwhile;

        print '</div>';
        print '</div>';

    endif;
    
}


