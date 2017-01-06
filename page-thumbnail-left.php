<?php
/*
Template Name: Thumbnail Left
*/
?>

<?php get_header(); ?>

<div class="col-lg-12 col-md-12 post-entry" id="primary">
	<div class="col-lg-2 col-md-2" id="secondary">
	    <?php the_post_thumbnail( 'thumb', array('class' => 'post-thumbnail') ); ?>
	</div>
<div class="col-lg-10 col-md-10">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
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
</div>

<?php get_footer(); ?>
