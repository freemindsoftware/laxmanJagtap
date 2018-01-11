<div class="header-wrapper navbar-fixed-top">
    <?php if (nominee_option('header-top-visibility', false, true)) : ?>
        <div class="header-top-wrapper">
            <div class="container">
                <div class="row">
                    <?php if (nominee_option('news-feed-visibility', false, true)) : ?>
                        <div class="col-sm-5 col-md-6">
                            <?php get_template_part( 'template-parts/news', 'ticker' ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="col-sm-7 col-md-6 pull-right hidden-xs">
                        <?php if (class_exists('SitePress') && nominee_option('language-switcher-visibility', false, true)): ?>
                            <div class="language-switcher pull-right">
                                <?php do_action('wpml_add_language_selector'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (nominee_option('header-contact')) : ?>
                            <div class="contact-info">
                                <?php echo wp_kses(nominee_option('header-contact', false, true), array(
                                    'a'  => array(
                                        'href'   => array(),
                                        'title'  => array(),
                                        'target' => array()
                                    ),
                                    'br' => array(),
                                    'i'  => array('class' => array()),
                                    'ul' => array('class' => array()),
                                    'li' => array(),
                                )); ?>
                            </div>
                        <?php endif; ?>
                    </div> <!-- .col-# -->
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .header-top-wrapper -->
    <?php endif; ?>


    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <?php if (nominee_option('donate-visibility')) : ?>
                    <div class="mobile-donate-button pull-right visible-xs">
                        <?php if (nominee_option('donate-page-link') == true): ?>
                            <a class="btn btn-primary" href="<?php echo get_page_link(nominee_option('donate-page')); ?>"><i class="fa fa-money"></i></a>
                        <?php else : ?>
                            <a class="btn btn-primary" href="<?php echo esc_url(nominee_option('donate-external-link')); ?>" target="_blank"><i class="fa fa-money"></i></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <?php 

                $margin_top = "";
                $margin_right = "";
                $margin_bottom = "";
                $margin_left = "";

                $margin_option = nominee_option('logo-margin'); 

                if ($margin_option['margin-top']) :
                    $margin_top = 'margin-top: '.$margin_option['margin-top'].';';
                endif;

                if ($margin_option['margin-right']) :
                    $margin_right = 'margin-right: '.$margin_option['margin-right'].';';
                endif;

                if ($margin_option['margin-bottom']) :
                    $margin_bottom = 'margin-bottom: '.$margin_option['margin-bottom'].';';
                endif;

                if ($margin_option['margin-left']) :
                    $margin_left = 'margin-left: '.$margin_option['margin-left'].';';
                endif;

                ?>
                
                <div class="navbar-brand" style="<?php echo esc_attr($margin_top.' '.$margin_right.' '.$margin_bottom.' '.$margin_left);?>">
                    <h1>
                        <a href="<?php echo esc_url(site_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            <?php if (nominee_option('logo-type', false, 'logo')) : 

                                // site logo
                                $site_logo = nominee_option('logo', 'url', get_template_directory_uri() . '/images/logo.png');
                                $site_mobile_logo = nominee_option('logo', 'url', get_template_directory_uri() . '/images/logo.png');

                                if (nominee_option('mobile-logo')) :
                                    $site_mobile_logo = nominee_option('mobile-logo', 'url', get_template_directory_uri() . '/images/logo.png');
                                endif;


                                // site retina logo
                                $site_retina_logo = nominee_option('retina-logo', 'url', get_template_directory_uri() . '/images/logo2x.png');
                                $site_retina_mobile_logo = nominee_option('retina-logo', 'url', get_template_directory_uri() . '/images/logo2x.png');

                                if (nominee_option('retina-mobile-logo')) :
                                    $site_retina_mobile_logo = nominee_option('retina-mobile-logo', 'url', get_template_directory_uri() . '/images/logo2x.png');
                                endif;

                                ?>

                                <img class="hidden-xs" src="<?php echo esc_url($site_logo) ?>" data-at2x="<?php echo esc_url($site_retina_logo) ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"/>
                                <img class="visible-xs" src="<?php echo esc_url($site_mobile_logo) ?>" data-at2x="<?php echo esc_url($site_retina_mobile_logo) ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"/>
                            <?php else : ?>
                                <?php if (nominee_option('text-logo')) :
                                    echo esc_html(nominee_option('text-logo'));
                                else :
                                    echo esc_html(get_bloginfo('name'));
                                endif;
                                ?>
                            <?php endif; ?>
                        </a>
                    </h1>
                </div> <!-- .navbar-brand -->
            </div> <!-- .navbar-header -->

            <div class="main-menu-wrapper hidden-xs clearfix">
                <div class="main-menu">
                    <?php if (nominee_option('donate-visibility')) : ?>
                        <div class="donate-button pull-right">
                            <?php if (nominee_option('donate-page-link') == true): ?>
                                <a href="<?php echo get_page_link(nominee_option('donate-page')); ?>"><?php echo esc_html(nominee_option('donate-button-text', false, true))?></a>
                            <?php else : ?>
                                <a href="<?php echo esc_url(nominee_option('donate-external-link')); ?>" target="_blank"><?php echo esc_html(nominee_option('donate-button-text', false, true))?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php wp_nav_menu( apply_filters( 'nominee_primary_wp_nav_menu', array(
                        'container'      => false,
                        'theme_location' => 'primary',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s nav navbar-nav navbar-right">%3$s</ul>',
                        'walker'         => new Nominee_Navwalker(),
                        'fallback_cb'    => 'Nominee_Navwalker::fallback'
                    ))); ?>
                </div>
            </div> <!-- /navbar-collapse -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="visible-xs">
                <div id="mobile-toggle" class="mobile-menu collapse navbar-collapse">
                    <?php wp_nav_menu( apply_filters( 'nominee_primary_wp_nav_menu', array(
                        'container'      => false,
                        'theme_location' => 'primary',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
                        'walker'         => new Nominee_Mobile_Navwalker(),
                        'fallback_cb'    => 'Nominee_Mobile_Navwalker::fallback'
                    ))); ?>
                </div> <!-- /.navbar-collapse -->
            </div>
        </div><!-- .container-->
    </nav>
</div> <!-- .header-wrapper -->