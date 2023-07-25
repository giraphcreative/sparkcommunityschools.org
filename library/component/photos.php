<?php


// output the photos
function the_photos() {

    // get the icon background color
    $color = get_sub_field( 'background_color' );
    $intro = get_sub_field( 'intro' );

    // check if the nested repeater field has rows of data
    if( have_rows('photo') ):
        print '<div class="photos-container">';

        print '<div class="photos-introduction"><h2>' . $intro . '</h2></div>';
        
        print '<div class="photos ' . $color . ( !empty( $classes ) ? ' ' . $classes : '' ) . '">';

        // loop through the rows of data
        while ( have_rows('photo') ) : the_row();

            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $button_text = get_sub_field('button_text');
            $button_link = get_sub_field('button_link');
            echo '<div class="photo"><div class="image-container">' . 
                '<img src="' . $image . '" /><h4>' . $title . '</h4></div>' . 
                '<div class="image-content">' . $content . '</div>' .
                ( !empty( $button_link ) ? '<a href="' . $button_link . '" class="btn navy">' : '' ) . $button_text . ( !empty( $button_link ) ? '</a>' : '' ) . 
            '</div>';

        endwhile;

        print '</div>';

    endif;
    
}


