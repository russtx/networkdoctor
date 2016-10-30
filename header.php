<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images//icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nd_logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
                                        <div class="title">
                                            <h1>The Network Doctor</h1>
                                            <h2>Integrating Communities Through Education and Business</h2>
                                                    
                                            
                                        </div>
                                        
                                            <div id="mypage-info1">
                                                <div class="headerwidget"><?php dynamic_sidebar( 'header-area' ); ?></div>
                                                <div class="clearfix"></div>
                                            </div>
					 <!-- nav -->
                                            <nav class="nav" role="navigation">
                                            <input class="menu-btn" type="checkbox" id="menu-btn" />	
                                            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

                                                    <?php html5blank_nav(); ?>
                                            </nav><!-- /nav -->

                                            	<div class="signUp">
                                                    <span> 
                                                        <a class="open-mypage1">Sign In</a> | <a href="<?php echo home_url(); ?>/sign-up">Sign Up</a>
                                                    </span>
                                                </div>
                                            
                                            
                                            

			</header>
			<!-- /header -->
