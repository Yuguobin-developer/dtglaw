<?php get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<div class="entry-content">
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    	<div class="below-title-meta">
    		<div class="left"><?php _e('By','themonic'); ?> <span class="author"><?php the_author(); ?></span> <span class="meta-sep">|</span> <?php echo get_the_date(); ?></div>
    		<div class="right"><a class="link-comments" href="<?php  comments_link(); ?>"><?php comments_number(__('0 Comments','themonic'),__('1 Comment'),__('% Comments')); ?></a></div>
    		<div class="clear"></div>
		</div>
    </header>
	<?php the_post_thumbnail() ?>
	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'themonic' ) ); ?>
	<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'themonic' ), 'after' => '</div>' ) ); ?>
</div><!-- .entry-content -->

<?php if(get_previous_post() || get_next_post()): ?>
<nav class="nav-single">
  <div class="flex f1 fbreak2 middle">
  <div id="ns-prev"><div class="ns-ib">
    <?php if(get_next_post()): ?>
      <?php next_post_link( '%link', '&laquo; Previous article' ); ?>
    <?php endif ?>
  </div></div>
  <div id="ns-next"><div class="ns-ib">
    <?php if(get_previous_post()): ?>
      <?php previous_post_link( '%link', 'Next article &raquo;' ); ?>
    <?php else: ?>
      <span>No more articles</span>
    <?php endif ?>
  </div></div>
  </div>
</nav>
<?php endif ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>