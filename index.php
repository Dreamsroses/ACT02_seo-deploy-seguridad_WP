<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

		<title>Singolo</title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="copyright" content="" />

<?php wp_head(); ?>

<!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->

<!--[if IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie9.css">
<![endif]-->

</head>

<body>

	<!-- Header
		============================= -->
	<div id="header">
        <div class="inner">
        
            <!-- Logo -->
            <h1 class="logo left"><a href="home.html">Singolo</a></h1><!-- .logo-->
            
            <!-- Nav Menu -->
            <ul class="nav-menu right">
                <li class="current"><a href="#home">home</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#contact">contact</a></li>
            </ul><!-- .nav-menu-->
        
        </div><!-- .inner -->
	</div><!-- #header -->
	<!-- End Header -->
    
    
	<!-- Slider
		============================= -->
	<div id="slider" class="theme-default">
        <div class="inner">
        
        	<div class="nivo-slider nivoSlider">
                <?php query_posts('posts_per_page=-1&category_name=slider'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <?php the_post_thumbnail('full'); ?>
                <?php endwhile; endif;?>
            </div>
                
        </div><!-- .inner -->
	</div><!-- #slider -->
	<!-- End Slider -->
    
    
	<!-- Services
		============================= -->
	<div id="services">
        <div class="inner">
        
        	<h2>Our Services</h2>
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>

                <!-- bulb, heart, phone, bubble, star, pen -->
                <?php query_posts('posts_per_page=-1&category_name=services'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
            	<li>
                	<span class="li_<?php echo (get_post_meta(get_the_ID(), 'icon', true)) ? get_post_meta(get_the_ID(), 'icon', true): 'bulb'; ?>"></span>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                </li>
                <?php endwhile; endif; ?>

            </ul>
            
        </div><!-- .inner -->
	</div><!-- #services -->
	<!-- End Services -->
    
    
	<!-- Portfolio
		============================= -->
	<div id="portfolio">
        <div class="inner">
        
        	<h2>Portfolio</h2>
            <h3>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</h3>
            
            <!-- Portfolio Menu -->
            <ul class="portfolio-menu filter">
            	<li class="current all"><a href="#">All</a></li>
                <?php foreach(get_tags() as $tag): ?>
                <li class="<?php echo $tag->slug; ?>"><a href="#"><?php echo $tag->name; ?></a></li>
                <?php endforeach; ?>
      
            </ul><!-- .portfolio-menu -->
            
            <!-- Portfolio -->
            <ul class="portfolio">

                <?php query_posts('posts_per_page=-1&category_name=portafolio'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
            	<li data-id="id-<?php the_ID(); ?>" data-type="<?php echo @get_the_tags()[0]->slug; ?>">
                    

                    <a href="<?php echo get_the_post_thumbnail_url(null, 'portafolio-full'); ?>" rel="prettyPhoto[portfolio]">

                        <?php the_post_thumbnail('portafolio-thumbnail'); ?>
                    </a>
                </li>
                <?php endwhile; endif; ?>
                
            </ul><!-- .portfolio -->
            
        </div><!-- .inner -->
	</div><!-- #portfolio -->
	<!-- End Portfolio -->
    
    
	<!-- About
		============================= -->
	<div id="about">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>About Us</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <!-- Profile -->
            <ul>
                <?php query_posts('posts_per_page=3&post_type=perfil'); ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
            	<li>
                	<?php the_post_thumbnail('avatar'); ?>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
         
                    <?php $redes = ['facebook', 'gplus', 'twitter', 'linkedin', 'behance', 'instagram']; ?>
                    <?php foreach($redes as $red): ?>
                    <?php if(get_post_meta(get_the_ID(), $red, true)): ?>
                        <a href="<?php echo get_post_meta(get_the_ID(), $red, true); ?>">
                            <span class="icon-<?php echo $red; ?>"></span>
                        </a>
                    <?php endif; ?>
                    <?php endforeach; ?>


                </li>
                <?php endwhile; endif; ?>
  
            </ul><!-- .portfolio-menu -->
            
        </div><!-- .inner -->
	</div><!-- #about -->
	<!-- End About -->
    
    
	<!-- Contact
		============================= -->
	<div id="contact">
        <div class="inner">
        
        	<!-- Title -->
        	<h2>Get a Quote</h2>
            
            <!-- Short Description -->
            <h3>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</h3>
            
            <ul>
            	<li>
                	<form action="" method="get">
                    	
                        <input name="Name" class="" type="text" value="Name (Required)" onfocus="if(this.value == 'Name (Required)') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name (Required)'; }" />
                        
                        <input name="Email" class="" type="text" value="Email (Required)" onfocus="if(this.value == 'Email (Required)') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Email (Required)'; }" />
                        
                        <input name="Subject" class="" type="text" value="Subject" onfocus="if(this.value == 'Subject') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Subject'; }" />
                        
                        <textarea name="Detail" cols="" rows="" onfocus="if(this.value == 'Describe your project in detail...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Describe your project in detail...'; }">Describe your project in detail...</textarea>
                        
                        <input type="submit" value="submit" name="subscribe" class="submitbtn" />
                        
                    </form>
                </li>
                
                <li>
                	<h4>Contact Information</h4>
                    <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis.</p>
                    
                    <span><i class="li_location"></i>Elm St. 14/05 Lost City </span>
                    <span><i class="icon-phone"></i>03528 331 86 35 </span>
                    <span><i class="icon-mail"></i>info@singolo.com</span>
                </li>
            </ul>
            
            
        </div><!-- .inner -->
	</div><!-- #contact -->
	<!-- End Contact -->
    
    
	<!-- Footer
		============================= -->
	<div id="footer">
        <div class="inner">
        
        	<p class="left">© Copyright 2013 by <a href="">PSDchat</a></p>
            
            <ul>
            	<li>
                    <a href=""><span class="icon-facebook"></span></a>
                    <a href=""><span class="icon-gplus"></span></a>
                    <a href=""><span class="icon-twitter"></span></a>
                    <a href=""><span class="icon-linkedin"></span></a>
                </li>
            </ul>
            
        </div><!-- .inner -->
	</div><!-- #footer -->
	<!-- End Footer -->
    
    <a href="" class="go-top">Top</a>
    

    <?php wp_footer(); ?>
</body>
</html>




















