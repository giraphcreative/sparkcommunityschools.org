<?php

get_header();

// if we have components for this page
if( have_rows('components') ):
	
    // loop through the components
    while ( have_rows('components') ) : the_row();

        // layout switch
        if ( get_row_layout() == 'header' ):
			the_header();

        elseif ( get_row_layout() == 'accordions' ): 
            the_accordions();
    
        elseif ( get_row_layout() == 'slides' ): 
            the_slides();
        
        elseif ( get_row_layout() == 'separator' ): 
            the_separator();
            
        elseif ( get_row_layout() == 'content' ): 
            the_content_area();

        elseif ( get_row_layout() == 'icons' ): 
        	the_icons();

        elseif ( get_row_layout() == 'image_text' ): 
        	the_image_text();

        elseif ( get_row_layout() == 'photos' ): 
            the_photos();
            
        elseif ( get_row_layout() == 'accordions' ): 
            the_accordions();
                
        elseif ( get_row_layout() == 'post_list' ): 
            the_post_list();
                            
        elseif ( get_row_layout() == 'list' ): 
            the_list();
                    
        elseif ( get_row_layout() == 'agenda' ): 
            the_agenda();
                                        
        endif;

    // End loop.
    endwhile;

endif;

get_footer();

?>