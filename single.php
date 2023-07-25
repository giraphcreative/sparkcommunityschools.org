<?php
/**
 * The Template for displaying all single posts
 */

get_header();

the_showcase();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 
		?>
    <div class="blockquote grey">
		<h1><?php the_title(); ?></h1>
		<p class="post-date">Posted: <?php the_date(); ?></p>
    </div>
	<div class="content-wide" role="main">
		<?php the_post_thumbnail( 'large', array( 'class' => 'alignright' ) ); ?>
		<?php the_content(); ?>
	</div>

		<?php
	endwhile;
endif;

get_footer();

?>