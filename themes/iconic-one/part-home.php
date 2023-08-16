<div id="page-home">

    <div id="welcome" class="section">
    <!-- <div id="owners"></div> -->
        <div class="limit">
            <h2 class="head1">Willow Spring Vineyards</h2>
            <div class="flex f1 fbreak1">
                <div>
                    <p>At Willow Spring Vineyards community and quality are our priorities. As an emerging family winery our commitment is deeply rooted to the people, grapes, and environment that make up the land we call home. We welcome all of you to stop by and be a part of this experience. A walk through the vineyards will no doubt find us tending the vines or harvesting the grapes among family and friends. So, come and taste our wine – be a part of the Willow Spring Vineyards story.</p>
                </div>
                <div>
                    <p>At Willow Spring Vineyards community and quality are our priorities. As an emerging family winery our commitment is deeply rooted to the people, grapes, and environment that make up the land we call home. We welcome all of you to stop by and be a part of this experience. A walk through the vineyards will no doubt find us tending the vines or harvesting the grapes among family and friends. So, come and taste our wine – be a part of the Willow Spring Vineyards story.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="practice" style="background-image:url('<?php echo get_template_directory_uri()?>/img/p-back.jpg">');">
        <div class="limit">
            <h3>Practice Areas</h3>
            <img src="<?php echo get_template_directory_uri()?>/img/practice.png">
        </div>
    </div>
    <div id="upcoming" class="section">
        <div class="limit">
            <div class="d-flex">
                <h3 class="head1">More than 150+ important cases reported</h3>
                <a href="/blog/" class="view_all">VIEW ALL EVENTS</a>
            </div>    
            <?php echo do_shortcode('[recent_post_carousel design="design-1" limit="4" "rtl":"true" show_category_name="false" show_date="false" dots="false" roop="false" autoplay="false" show_author="false"]'); ?>
        </div>
    </div>
    <div id="client" class="section">
        <div class="flex f1 fbreak1">
            <div class="main" style="background-image: url('<?php echo get_template_directory_uri()?>/img/what.png');">
                <div class="over-wrap"></div>
                <div class="main-content">
                    <h3>What Our Client Say</h3>
                    <p>When problems arise, we have the experience and skill <br>you need. Call now for a free consultation.</p>
                    <a href="#" class="btn btn-yellow">VIEW ALL TESTIMONIALS</a>
                </div>
            </div>  
            <img src="<?php echo get_template_directory_uri()?>/img/quote.png">
            <?php echo do_shortcode('[sp_testimonial id="142"]');?>
                
        </div>   
    </div>

    <div id="articles" class="section">
        <div class="limit">
            <h3 class="title">Latest Articles</h3>
            <div class="flex f1 fbreak1">
                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    );

                    $posts_query = new WP_Query( $args );

                    if ( $posts_query->have_posts() ) {
                        while ( $posts_query->have_posts() ) {
                            $posts_query->the_post();
                            // Display the featured image, title, content, and permalink
                            echo '<div class="post">';
                            echo '<div class="post-thumbnail">' . get_the_post_thumbnail() . '</div>';
                            echo '<h4 class="post-title"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
                            the_content();
                            echo '<p class="author">' . get_the_date() . ' - '. get_the_author() .'</p>';
                            echo '</div>';
                        }
                        wp_reset_postdata();
                    }

                ?>
            </div>
            <div class="button-area">
                <a href="#" class="btn btn-default more">MORE FROM OUR BLOG</a>
            </div>
            
        </div>   
    </div>
    <div id="third-part" class="limit">
        <div class="flex">
            <img src="<?php echo get_template_directory_uri()?>/img/1.png">
            <div class="d-flex">
                <div class="desc"><span class="letter">If</span><span>At Willow Spring Vineyards community and quality are our priorities.As an emerging family winery our commitment is deeply rooted to the people, grapes, and environment that make up the land we call home. We welcome all of you to stop by and be a part of this experience. </span></div>
            </div>
        </div>
        <hr>
        <div class="flex">
            <img src="<?php echo get_template_directory_uri()?>/img/2.png">
            <div class="d-flex">
                <div class="desc"><span class="letter">Time</span><span>At Willow Spring Vineyards community and quality are our priorities.As an emerging family winery our commitment is deeply rooted to the people, grapes, and environment that make up the land we call home. We welcome all of you to stop by and be a part of this experience.</span></div>
            </div>
        </div>
        <hr>
        <div class="flex">
            <img src="<?php echo get_template_directory_uri()?>/img/3.png">
            <div class="desc"><span class="letter">DeToffol & Gittleman</span><span>At Willow Spring Vineyards community and quality are our priorities.As an emerging family winery our commitment is deeply rooted to the people. </span></div>
        </div>
        <hr>
    </div>
    <div id="content-bottom">
        <div class="background-wrap" style="background-image: url('<?php echo get_template_directory_uri()?>/img/background.png');"></div>
        <div class="limit">
            <div class="flex f1 fbreak1">
                <img src="<?php echo get_template_directory_uri()?>/img/man1.png">
                <div class="button-area"><a href="#" class="btn btn-yellow">Reach Out Now!</a></div>                
                <img src="<?php echo get_template_directory_uri()?>/img/man2.png">
            </div>
        </div>
    </div>

</div>