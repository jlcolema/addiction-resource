<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link src="<?php bloginfo('template_directory'); ?>/new/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108028749-4"></script>
    <link defer rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1" crossorigin="anonymous">
    <meta name="format-detection" content="telephone=no">
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-108028749-4');
    </script>
    <script async src="//167549.tctm.co/t.js"></script>
    <link rel="stylesheet" href="/wp-content/plugins/ubermenu/assets/css/ubermenu.css" type="text/css" media="screen" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="head-wp">
      <header itemtype="http://schema.org/WPHeader" itemscope="itemscope" id="header" class="header header-fx">
        <div class="container header-inner">
          <div class="row">
            <div class="col-6">
              <a href="/"><img class="head-logo" src="<?php bloginfo('template_directory'); ?>/images/full-logo-dark.png" alt="Addiction Resource"/></a>
            </div>
            <div class="col-6">
              <div class="header-cta-wrapper">
                <p class="header-cta-phone-wrap">
                  <span class="header-cta-txt">
                    <span class="header-cta-txt-top">Get Help Now</span>
                    <span class="header-cta-txt-bottom">100% confidential & free.</span>
                  </span>
                  <a class="header-cta-phone-number" href="tel:+1-844-616-3400">(844) 616-3400</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-main">
          <div class="container">
            <?php ubermenu( 'main' , array( 'theme_location' => 'header-menu' ) ); ?>
          </div> 
        </div>
      </header>
    </div>