<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

  <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <nav class="navbar navbar-inverse navbar-fixed-top">

      <div class="row header-widget">

        <div class="container">      

            <div class="col-md-4">        
                <?php if (dynamic_sidebar( 'header-left' ) ); ?>
            </div>
            <div class="col-md-4">
              <?php if (dynamic_sidebar( 'header-center' ) ); ?>
            </div>
            <div class="col-md-4">
              <?php if (dynamic_sidebar( 'header-right' ) ); ?>
            </div>
          
          </div> <!-- container -->
        </div> <!-- row -->


        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed hamburger" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
          </div>


          <div id="navbar" class="navbar-collapse collapse">            
            <?php 
              $args = array(
                'menu'        =>  'header-menu',
                'menu_class'  =>  'nav navbar-nav',
                'container'   =>  false
                );
              wp_nav_menu( $args );
            ?>
          </div><!--/.navbar-collapse -->
        </div>
      </nav>




