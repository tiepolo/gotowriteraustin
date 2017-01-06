<?php get_header(); ?>

<div class="col-md-12" id="primary">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="post-entry">
	      <header class="entry-header">
	          <h1><?php the_title(); ?></h1>
	      </header>
	      <div class="entry-summary">
	        <?php the_content(); ?>
	      </div>
	      <footer class="entry-footer"><span class="comments-link">
	        <i class="fa fa-comment"></i><?php comments_popup_link( 'Leave a comment', '1 comment', '% comments' ); ?></span><?php edit_post_link( __( 'Edit' ), '<span class="edit-link"><i class="fa fa-edit"></i>&nbsp;', '</span>' ); ?>
	      </footer>
	  </article>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

	<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
		endif;
	?>

	<?php moesia_post_nav(); ?>	

</div>

<?php get_footer(); ?>
