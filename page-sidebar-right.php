<?php
/*
Template Name: Sidebar Right
*/
?>

<?php get_header(); ?>

<div class="col-lg-8 col-md-8" id="primary">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="post-entry">
	      <header class="entry-header">
	          <h1><?php the_title(); ?></h1>
	          <span class="posted-on"><i class="fa fa-calendar posted-on"></i><a href="#"><time class="entry-date published" datetime="2016-12-11T07:41:59+00:00"><?php the_date(); ?></time></a></span>
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

</div>
<div class="col-lg-4 col-md-4" id="secondary">
    <div class="widget-area">
					<?php get_sidebar(); ?>
		</div>
</div><!-- #primary-sidebar -->


<?php get_footer(); ?>
