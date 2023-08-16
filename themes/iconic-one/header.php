<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" type="image/png" href="/wp-content/uploads/favicon.png">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|PlayfairDisplay:400,500,600,700,800,900">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="banner" class="<?php if(is_page('Home')): ?>b-home<?php else: ?>b-inner<?php endif ?>">

<div id="header">
    <div class="limit">
        <div class="flex f1 fbreak1">
            <div>
                <p class="call">Call us now!</p>                 
                <a class="btn btn-blue phone-number"><i class="fa fa-light fa-phone"></i> (212) 962-2220</a>
            </div>
            <div class="logo-area">
                <img src="<?php echo get_template_directory_uri()?>/img/logo1.png">
            </div>
            <div class="header-right-area">
                <p class="call">No fee until we win!</p> 
                <a class="btn btn-yellow">FREE CONSULTATION</a>
            </div>
        </div>
    </div>
    <div id="site-nav">
        <div class="limit">
            <nav id="site-navigation" class="themonic-nav">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu-top', 'menu_class' => 'nav-menu' ) ); ?>
            </nav>
            <?php echo do_shortcode("[responsive_menu]"); ?>
        </div>
    </div>
</div>

<?php if(is_page('Home')): ?>
    <div class="home-banner" style="background-image: url('<?php echo get_field('home_banner_image', 'options')?>');">
        <div class="flex f1 fbreak1">
            <div class="image-area">
                <img src="<?php echo get_template_directory_uri()?>/img/bannerman.png">
            </div>
            <div class="banner-main">      
                <div>
                    <h2><?php echo get_field('home_banner_title', 'options');?></h2>
                    <p><?php echo get_field('home_banner_description', 'options');?></p>
                    <a href="" class="btn btn-yellow get_free">Get a free consultation <i class="fa fa-arrow-right"></i></a>
                </div>      
            </div>
        </div>
    </div>
    <div class="b-barn"></div>

<?php else: ?>

    <div class="b-over banner-title" style="background-image:url('<?php echo get_template_directory_uri()?>/img/ibanner.svg');">
        <div class="background-wrap"></div>
        <div class="flex f1 fbreak1 limit">
            <img src="<?php echo get_template_directory_uri()?>/img/man1.svg">
            <div class="d-flex">
                <div>
                    <h1 class="b-head1 animated fadeInUp delay1 duration2 eds-on-scroll"><?php the_title(); ?></h1>
                    <div class="dot"></div>
                    <label>Subtitle placed here</label>
                </div>                
            </div>
            <img src="<?php echo get_template_directory_uri()?>/img/man2.svg" style="margin-top: 15px;">
        </div>
    </div>
<?php endif ?>

</div><!-- #banner -->

<?php if(is_page('Home')): ?>
    <?php get_template_part('part-home'); ?>
<?php endif ?>

<style type="text/css">.b-inner {background-image:url('<?php the_field( 'banner_image', 'options' ); ?>');}</style>

<div id="page-wrap">
<div id="page" class="hfeed site">
    <div id="main" class="wrapper">
