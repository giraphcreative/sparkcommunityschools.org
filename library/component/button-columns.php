<?php


// output the icons
function the_button_columns() {

    // get the icon background color
    $title = get_sub_field( 'title' );
    $background_color = get_sub_field( 'background_color' );

    // check if the nested repeater field has rows of data
    if( have_rows('column') ):
        
        print '<div class="button-columns ' . $background_color . '">';
        if ( !empty( $title ) ) print '<h2>' . $title . '</h2>';
        print '<div class="button-columns-inner">';

        // loop through the rows of data
        while ( have_rows('column') ) : the_row();

            $image = get_sub_field('image');
            $content = get_sub_field('content');
            $button_text = get_sub_field('button_text');
            $button_link = get_sub_field('button_link');
            $color = get_sub_field('color');
            echo '<div class="column ' . $color . '">
                <div class="column-image">
                    <img src="' . $image . '" />
                </div>
                <div class="column-content">
                    <p>' . $content . '</p>
                </div>
                <a href="' . $button_link . '" class="btn ' . $color . '">' . $button_text . '</a>
            </div>';

        endwhile;

        print '</div>';
        print '</div>';

    endif;
    
}


