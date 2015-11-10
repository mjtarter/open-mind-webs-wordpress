<?php 
/**
 * Template Name: About Page
 */

get_header(); ?>

<section class="main-content">
	<div class="container">
		<div class="col-md-8 vert-middle no-float">
			<p class="text-center h3" style="margin-top:50px;"><b>Open Mind Webs</b></p>
			<p>Open Mind Webs is a web development company founded by Matt Tarter in January of 2014 with the mission of providing a combination of top-notch web development services and cost effective prices that allow business both large and small to gain the competitive advantage necessary to succeed. I provide marketing and front end development services to businesses and individuals who want to take full advantage of the web to market themselves to be the most successful they can be. With a portfolio including a wide variety of web-based marketing services and clients ranging from optometrists to film producers to charitable organizations, I have the experience and expertise necessary to put you ahead of the competition.</p>	
			<div class="matt">
				<div class="vert-middle">
					<img src="<?php echo get_template_directory_uri(); ?>/img/matt.png" class="img-circle">
				</div>
				<div class="vert-middle"> 
					<ul id="matt-resume-head" class="text-center">
						<li><b>Matthew J. Tarter</b></li>
						<li><i>Denver, CO</i></li>
						<li><i class="fa fa-github-square"></i><a href="https://github.com/mjtarter" target="_blank"> Github</a></li>
                		<li><i class="fa fa-linkedin-square"></i><a href="https://www.linkedin.com/in/mjtarter" target="_blank"> Linked In</a></li>
						<li><span class="glyphicon glyphicon-envelope"></span><a href="contact.php"> Message</a></li>
						<li><span class="glyphicon glyphicon-share-alt"></span><a href="contact.php"> Hire Me</a></li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="h3 text-center"><b>Bio</b></p>
			<p>After graduating from Indiana University with a degree in Management and a Business Certificate, I decided to stray from my initial career path. I took a leap of faith and began teaching myself to code day and night. I eventually founded this web development / marketing company as well as a student housing based startup (MyCampusIsland.com). I currently spend my time working on MyCampus Island, building awesome websites and web services for my clients at Open Mind Webs, developing content for Lodge Design, and continuing to expand and improve my skills. I moved to Denver from Indianapolis in February of 2015 and am excited for new challenges and opportunities.</p>
		</div>
		<div class="hidden-xs hidden-sm col-md-4 vert-middle no-float">
			<img src="<?php echo get_template_directory_uri(); ?>/img/web-design.jpg" class="col-md-12 img-responsive">
		</div>
	</div>
	<div class="container">
		<div id="resume" class="col-sm-8 no-float">
			<hr>
			<!-- Begin Skills -->
			<?php 
				$args = array(
		        	'post_type' => 'skill',
         			'posts_per_page' => -1,
				);
				$query = new WP_query($args);
			?>
			<p class="h3 text-center"><b>Skills</b></p>
			<div class="clearfix skills">
				<ul>
					<?php if ($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
						<?php if( get_field('layout') == "Left" ): ?>
							<li><span class="glyphicon glyphicon-chevron-right"></span> <?php the_field('skill'); ?></li>
						<?php endif; ?>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
				<ul>
					<?php if ($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
						<?php if( get_field('layout') == "Right" ): ?>
							<li><span class="glyphicon glyphicon-chevron-right"></span> <?php the_field('skill'); ?></li>
						<?php endif; ?>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</div>
			<!-- End Skills -->
			<div class="clearfix">
				<hr>
				<p class="h3 text-center"><b>Education</b></p>
				<div style="display:table; width:100%;">
					<div class="vert-middle">
						<p><b>Indiana University, School of Public and Environmental Affairs, BA/Dec 2013</b><br>Major: Management<br><b>Indiana University, Kelley School of Business</b><br>Business Foundations Certificate</p>
					</div>
					<div class="hidden-xs vert-middle p-hor-10">
						<img src="<?php echo get_template_directory_uri(); ?>/img/iu-logo.png" style="max-height:85px;" class="img-responsive">
					</div>
				</div>
			</div>
			<hr>
			<div id="work-experience">
				<p class="text-center h3"><b>Work Experience</b></p>
				<p><b>Open Mind Webs</b><span class="pull-right"><i>Jan 2014 - Present</i></span><br><i>President, Web Developer</i></p>
				<ul>
					<li>&#8226;	Founder of web services company specializing in web development</li>
					<li class="hidden-xs hidden-sm">&#8226; Provide services in web design, SEO, web development, E-commerce, database management, etc.</li>
					<li class="hidden-xs hidden-sm">&#8226; Earned sustainable revenues through production of websites and DBMS for clients including film producer, charity, architectural firm, ophthalmologist/surgery center, etc.</li>
				</ul><br>
				<p><b>Lodge Design</b><span class="pull-right"><i>Apr 2014 - Present</i></span><br><i>Content Developer</i></p>
				<ul>
					<li>&#8226;	Facilitate item synchronization from vendor to merchant with large quantities of products to industry leading E-commerce sites including Wal-Mart and Staples</li>
					<li class="hidden-xs hidden-sm">&#8226; Develop product descriptions and content for SEO optimization</li>
				</ul><br>
				<p><b>MyCampus Island</b><span class="pull-right"><i>June 2012 - Present</i></span><br><i>Sole-Proprietor, Web Developer</i></p>
				<ul>
					<li>&#8226;	Developed web-based student housing app to provide easier access to student housing</li>
					<li class="hidden-xs hidden-sm">&#8226; Created a proprietary housing encyclopedia, providing a database of in-depth individual pages for a multitude of student housing properties</li>
				</ul><br>
				<p><b>Ted Green Films</b><span class="pull-right"><i>Nov 2012 - Sept 2013</i></span><br><i>Web Developer, Research Assistant</i></p>
				<ul>
					<li>&#8226;	Developed company website and assisted in production of two PBS documentaries for Regional Emmy Award winning film producer Ted Green</li>
					<li class="hidden-xs hidden-sm">&#8226; Engaged in complex research through online libraries, in depth searches, microfilm extractions, and various personal contacts</li>
				</ul>
				<hr>
			</div>
			<p class="text-center h3"><b>Hobbies</b></p>
			<div class="clearfix" style="margin-bottom:50px;">
				<ul id="hobbies" class="text-center">
					<li><i class="fa fa-money"></i> Finance</li>
					<li><i class="fa fa-university"></i> Investing</li>
					<li><i class="fa fa-bicycle"></i> Fitness</li>
					<li><i class="fa fa-briefcase"></i> Business</li>
					<li><i class="fa fa-glass"></i> Social </li>
					<li><i class="fa fa-sun-o"></i> Pool </li>
				</ul>
			</div>
			<button id="work-experience-btn" style="display:block; margin-bottom:50px;" onClick="showWorkExperience();" class="button orange-button center-block"><span class="glyphicon glyphicon-chevron-down"></span> Work Experience</button>
		</div>
		<div class="hidden-xs col-sm-4 vert-middle no-float">
			<p class="text-center h3"><b>What Makes Me Unique?</b></p>
			<p class="h4"><span class="glyphicon glyphicon-ok-circle"></span> Drive:</p>
			<p>I have a passion for web development and technology and will do whatever it takes to be the best.</p>
			<p class="h4"><span class="glyphicon glyphicon-ok-circle"></span> Integrity:</p>
			<p>I take a lot of pride in any product / service that my name is attached to. Whether you are my client, teammate, co-worker, boss, etc. I will go out of my way to make sure that you are rewarded for your confidence in working with me.</p>
			<p class="h4"><span class="glyphicon glyphicon-ok-circle"></span> Experience in variety of roles:</p>
			<p>I have managed employees, ran multiple businesses, and had client facing, team-oriented, and independent roles. My various experiences have given me the skillsets necessary to be successful in a wide range of positions within organizations.</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>