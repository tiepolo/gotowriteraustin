<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?> | <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="row navigation">
        <div class="col-md-12">
            <div class="container">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        </div>
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'header-menu',
                                'theme_location'    => 'header-menu',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <header id="main-header">
        <div class="container header">
            <div class="col-lg-9 col-md-9 col-sm-8 brand"><a href="<?php bloginfo( 'wpurl' );?>"><img src="<?php bloginfo('template_directory');?>/assets/img/gtw_logo.png" alt="Go To Writer Austin" class="logo"></a></div>
            <div class="col-lg-3 col-md-3 col-sm-4 info">
                <p>Roberta Coffin | (000) 555-5555 </p>
                <p><a href="mailto:roberta@gotowriteraustin.com">roberta@gotowriteraustin.com</a> </p>
                <p>
                    <a href="#" class="social social-rss"><i class="fa fa-rss"></i></a>
                    <a href="#" class="social social-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social social-google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social social-twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social social-linkedin"><i class="fa fa-linkedin"></i></a>
                </p>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-md-12">
            <div class="container" id="main-content">
