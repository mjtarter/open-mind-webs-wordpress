<?php get_header(); ?>

<?php get_template_part('partial', 'mci_form_modal'); ?>

<div id="index-carousel" class="carousel slide" data-ride="carousel" data-interval="6000">
   <!-- Indicators -->
   <ol class="carousel-indicators">
      <li data-target="#index-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#index-carousel" data-slide-to="1"></li>
      <li data-target="#index-carousel" data-slide-to="2"></li>
   </ol>

   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
      <div class="item active" id="item-1">
         <div class="container" id="carousel-container">
            <div class="hidden-xs col-sm-3 align-middle no-float">
               <p class="text-center"><i>"I help businesses and individuals exceed their goals by harnessing the power of the web."</i></p>
            </div>
            <div class="col-sm-6 align-middle no-float">
               <h1 class="text-center">Matt Tarter</h1>
               <hr>
               <p class="text-center"><i>Front End Developer</i></p>
               <img src="<?php echo get_template_directory_uri(); ?>/img/matt.png" class="img-circle center-block" height=200>
            </div>
            <ul class="col-sm-3 no-float align-middle">
               <li><p><i class="fa fa-github-square"></i> <a href="https://github.com/mjtarter" target="_blank">Github</a></p></li>
               <li><p><i class="fa fa-linkedin-square"></i> <a href="https://www.linkedin.com/in/mjtarter" target="_blank">Linked In</a></p></li>
               <li><p><span class="glyphicon glyphicon-user"></span> <a href="get_template_directory_uri()/about" target="_blank">About Me</a></p></li>
               <li><p><span class="glyphicon glyphicon-briefcase"></span> <a href="get_template_directory_uri()/portfolio" target="_blank">Portfolio</a></p></li>
            </ul>
         </div>
      </div>
      <div class="item" id="item-2">
         <div class="container">
            <ul id="portfolio-list">
               <li class="col-xs-6 col-sm-4"><a href="get_template_directory_uri()/mycampus-island"><img src="<?php echo get_template_directory_uri(); ?>/img/mycampus-island.jpg"></a></li>
               <li class="col-xs-6 col-sm-4"><a href="get_template_directory_uri()/dropping-dimes"><img src="<?php echo get_template_directory_uri(); ?>/img/dropping-dimes.jpg"></a></li>
               <li class="col-xs-6 col-sm-4"><a href="get_template_directory_uri()/rb-architects"><img src="<?php echo get_template_directory_uri(); ?>/img/randb.jpg"></a></li>
               <li class="col-xs-6 col-sm-4"><a href="get_template_directory_uri()/abrams-eyecare"><img src="<?php echo get_template_directory_uri(); ?>/img/abrams-eyecare.jpg"></a></li>
               <li class="hidden-xs col-sm-4"><a href="get_template_directory_uri()/ted-green-films"><img src="<?php echo get_template_directory_uri(); ?>/img/ted-green-films.jpg"></a></li>
               <li class="hidden-xs col-sm-4"><a href="get_template_directory_uri()/the-only"><img src="<?php echo get_template_directory_uri(); ?>/img/the-only.png"></a></li>
            </ul>
         </div>
         <div class="carousel-caption">
            <h2 class="text-center">
               <a href="get_template_directory_uri()/portfolio"><span class="glyphicon glyphicon-share-alt"></span> View Portfolio</a>
            </h2>
         </div>
      </div>
      <div class="item" id="item-3">
         <div class="container" id="carousel-container">
            <div class="vert-middle text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/img/mci-logo.png" class="img-responsive center-block">
               <hr>
               <p>
                  MyCampus Island is a startup that I have been developing in my spare time and has been a hobby and passion of mine for quite awhile. <span class="hidden-xs">MCI is a revolutionary web-based application for Indiana University students that provides updated student housing listings as well as the "Student Housing Encyclopedia", which displays in-depth individual pages for EVERY student housing property.</span> <br><br> I am open to bringing in new members to the MCI team (just me as of right now) as well as speaking with potential investors.
               </p>
               <a href="http://mycampusisland.com" target="_blank"><button class="button aqua-button"><span style="color:white;" class="glyphicon glyphicon-share-alt"></span> Check It Out!</button></a>
               <a href="#mciModal" data-toggle="modal"><button class="button aqua-button"><span style="color:white;" class="glyphicon glyphicon-share-alt"></span> Contact Me</button></a>
            </div>
         </div>
      </div>
   </div>

   <!-- Controls -->
   <a class="left carousel-control" href="#index-carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#index-carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
   </a>
</div>

<section id="intro" class="text-center">
   <div class="container">
      <p style="font-size:2.3em;"><b>WELCOME TO OPEN MIND WEBS</b></p>
      <hr>
      <h2>I create awesome stuff on the web and help businesses grow.</h2><br>
      <p style="font-size:1.4em"><samp>Click the button below to learn more about the man behind the code.</samp></p><br>
      <a href="get_template_directory_uri()/about" class="button button-large orange-button" style="color:white"><span class="glyphicon glyphicon-user"></span> Matt Tarter</a>
   </div>
</section>

<!-- Services Slider -->
<div class="text-center" id="services-container">
   <div class="container" style="display:table; height:300px;">
      <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 vert-middle no-float" id="services">
         <h2 class="services-title m-0">Services</h2>
         <p class="p-vert-5">I provide a combination of top-notch web development services and cost effective prices that allow businesses both large and small to gain the competitive advantage necessary to succeed.</p>
         <p><i>Click the icon below to learn more about my services</i></p>
      </div>
   </div>
</div>
<!-- End Slider -->

<!-- Slider Icons: All Services icon (Set equal to the first service post) !-->
<?php 
   $args = array(
      'post_type' => 'service',
      'posts_per_page' => 1,
   );
   
   $query = new WP_query($args);
?>   

<div id="services-bar-container">
   <div class="container">
      <div class="row">
         <ul id="services-buttons">
            <p class="visible-xs text-center" style="color:white;"><i>Click an icon for more info</i></p>
            <li>
            <?php if ($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
               <a href="<?php the_permalink(); ?>">
            <?php endwhile; endif; wp_reset_postdata(); ?>  
                  <img src="<?php echo get_template_directory_uri(); ?>/img/all-services.png" id="all-services" class="center-block">
                  <p class="text-center m-0">All Services</p>
               </a>
            </li>
            <!-- End All Services icon !-->

            <!-- Remaining Service icons !-->
            <?php 
               $args = array(
                  'post_type' => 'service',
                  'posts_per_page' => -1,
               );
               
               $query = new WP_query($args);
            ?>  
            
            <?php if ($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); 
                  
               //Vars
               $transparent_icon = get_field('transparent_icon');
               $icon = get_field('icon'); 

               //Clean up user field input for inline JS
               foreach (get_post_custom_values('short_description') as $desc ) $short_description = addslashes($desc); //Escape Quotes  
               foreach (get_post_custom_values('call_to_action') as $value ) $cta = addslashes($value); //Escape Quotes 
               foreach (get_post_custom_values('service') as $id ) $strip = array(' ', '/'); $id = str_replace($strip, '', $id); $id = stripcslashes($id); //Strip invalid characters for id field ?> 

               <li onMouseOver="changeSlide('<?php the_field('service') ?>', '<?php echo $short_description; ?>', '<?php the_field('slide_color') ?>', '<?php echo $icon['url']; ?>', '<?php echo $id ?>', '<?php echo $cta ?>');" onMouseOut="changeTextAllServices(); changeIconTrans('<?php echo $id ?>', '<?php echo $transparent_icon['url']; ?>');">
                  <a href="<?php the_permalink(); ?>">
                     <img src="<?php echo $transparent_icon['url']; ?>" alt="<?php echo $transparent_icon['alt']; ?>" id="<?php echo $id ?>" class="center-block">
                     <p class="text-center m-0"><?php the_field('service') ?></p>
                  </a>
               </li>
            <?php endwhile; endif; wp_reset_postdata(); ?>

         </ul>
      </div>
   </div>
</div>
<!-- End Slider Icons-->

<section id="process-section">
   <div class="container hidden-xs">
      <p class="text-center" id="process-title"><b> How The Process Works </b></p>
      <table id="process">
         <tr>
            <td class="text-center">Submit Contact Form</td>
            <td class="text-center">Initial Meeting</td>
            <td class="text-center">Estimate</td>
            <td class="text-center">Interface Design</td>
            <td class="text-center">Coding</td>
            <td class="text-center">Feedback</td>
            <td class="text-center">Testing</td>
            <td class="text-center">Launch</td>
            <td class="text-center">Continued Contact</td>
         </tr>
      </table>
      <div class="process-text col-sm-6">
         <p class="text-center" style="font-size:1.5em;"><b>Planning / Strategy</b></p>
         <p class="text-center">Whether you are interested in a website, database management system, or other web service, there is no reason to feel overwhelmed at the initial stages. I'll help you to find a starting point and take you through the process of coming up with the look, feel, and content structure that will work best for your particular business. All you need is an idea and I can help you throughout the process of planning to completion.</p>
      </div>
      <div class=" process-text col-sm-6">
         <p class="text-center" style="font-size:1.5em;"><b>Maintenance</b></p>
         <p class="text-center">Once your desired web service is completed and launched I don't just set you loose on your own. I offer maintenance and content update plans because your business, your customers, your competitors, and the web in general are all constantly adapting and improving so why shouldn't your website? However, if you'd like to take over full control of your site, I can teach you how to make minor updates and changes on your own as well.</p>
      </div>
   </div>

   <!-- Begin Testimonials -->
	<?php 
		$args = array(
         'post_type' => 'testimonials',
         'posts_per_page' => 3,
		);
		$query = new WP_query($args);
		$testimonial_counter = 1;
	?>

   <div class="container">
    	<p class="text-center" id="process-title"><b>What My Clients Are Saying</b></p>
   	<?php if ($query->have_posts() ) : while($query->have_posts() ) : $query->the_post();?>
		<?php $testimonial_counter++; ?>

    	   <div class="col-sm-6 col-md-4 <?php if($testimonial_counter % 3 == 0) {echo 'hidden-xs hidden-sm';} ?>">
            <div class="text-center testimonial">
               <p><span class="glyphicon glyphicon-comment"></span></p>
	            <blockquote>
	               <p><?php the_field('client_testimonial') ?></p>
	               <footer>
	                  <span style="color:tan;"><b><?php the_field('client_name') ?>,</b> <?php the_field('client_position') ?></span><br><i><span style="color:orange;"><?php the_field('client_business_name') ?></span></i>
	               </footer>
	            </blockquote>    
            </div>  
		   </div>
         
      <?php endwhile; endif; wp_reset_postdata(); ?>
  	</div>
  	<!-- End Testimonials -->

	<button onclick="window.location.href='get_template_directory_uri()/contact'" class="center-block button button-large orange-button" style="display:block; margin-top:60px;"><span class="glyphicon glyphicon-hand-right"></span> Get Started</button>
</section>

<?php get_footer(); ?>