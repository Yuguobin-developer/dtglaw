<?php
/*
 * Content display template, used for both single and index/category/search pages.
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : // for top sticky post with blue border ?>
			<div class="featured-post"><?php _e( 'Featured Article', 'themonic' ); ?></div>
		<?php endif; ?>

<?php if(is_search() || is_home() || is_category() || is_tag() || is_archive()) : // archive pages ?>
		
<div class="entry-summary flex">
    <?php if((function_exists('has_post_thumbnail')) && (has_post_thumbnail())): ?>
        <div class="es-img f0"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'themonic' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_post_thumbnail('thumbnail'); ?></a></div>
    <?php endif ?>
    <div class="es-txt">
        <header class="entry-header">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( '%s', 'themonic' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        </header>
        <?php the_excerpt(); ?>
    </div>
</div><!-- .entry-summary -->

<?php else: // single post in single.php ?>

<?php endif; ?>

<footer class="entry-meta">
<?php $categories = get_the_category(); if (esc_html( $categories[0]->name ) != "Uncategorized"): ?>
		<span><?php _e('Category:','themonic'); ?> <?php the_category(' '); ?></span> <span><?php the_tags(); ?></span>
<?php endif ?>
</footer>

	</article><!-- #post -->