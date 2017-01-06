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
	        <?php edit_post_link( __( 'Edit' ), '<span class="edit-link"><i class="fa fa-edit"></i>&nbsp;', '</span>' ); ?>
	      </footer>
	  </article>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

</div>

<?php get_footer(); ?>
