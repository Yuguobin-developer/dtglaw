	<?php if ( is_active_sidebar( 'themonic-sidebar' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'themonic-sidebar' ); ?>
		</div><!-- #secondary -->
	<?php else : ?>	
	 		<div id="secondary" class="widget-area" role="complementary">
			<div class="widget widget_search">
				<?php get_search_form(); ?>
			</div>
			<div class="widget widget_recent_entries">
				<h4 class="widget-title"><?php _e( 'Recent Posts', 'themonic' ); ?></h4>
				<ul><?php wp_get_archives('type=postbypost&limit=5'); ?></ul>
			</div>
			<div class="widget widget_pages">
			<h4 class="widget-title"><?php _e( 'Pages', 'themonic' ); ?></h4>
          <ul><?php wp_list_pages('title_li='); ?></ul>
      </div>
	  
	  <div class="widget widget_tag_cloud">
       <h4 class="widget-title"><?php _e( 'Tag Cloud', 'themonic' ); ?></h4>
        <?php wp_tag_cloud('smallest=10&largest=20&number=30&unit=px&format=flat&orderby=name'); ?>
			</div>
		</div><!-- #secondary -->
	<?php endif; ?>