</div><!-- #main .wrapper -->
</div><!-- #page -->
</div><!-- #page-wrap -->

<div id="footer">
	<div class="limit">
        <nav id="site-navigation" class="themonic-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu-top', 'menu_class' => 'nav-menu' ) ); ?>
        </nav>
        <?php echo do_shortcode("[responsive_menu]"); ?>
        <hr class="footer-hr">
    </div>
    <div class="limit logo-part">
        <div class="flex f1 fbreak1">
            <div>
                <div class="call">Call us now!</div>              
                <a class="btn btn-blue phone-number btn-footer"><i class="fa fa-light fa-phone"></i> (212) 962-2220</a>
            </div>
            <div class="logo-area d-flex">
                <img src="<?php echo get_template_directory_uri()?>/img/logo.png">
            </div>
            <div class="d-flex">
            	<div class="no-fee">
	                <div class="call">No fee until we win!</div>  
	                <a href="#" class="btn btn-outline">FREE CONSULTATION</a>
                </div>
            </div>
        </div><hr>
    </div>
    <div class="limit bottom">
        <div class="flex f1 fbreak1">
            <div>
                <p>@ DeToffol & Gittleman</p>              
            </div>
            <div>
                <p class="website">Website by Chuck Sink Link</p>  
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>