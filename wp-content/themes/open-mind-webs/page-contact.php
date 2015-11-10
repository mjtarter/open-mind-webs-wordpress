<?php 
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<?php get_template_part('partial', 'contact_form_modal'); ?>

<section class="main-content p-vert-50 services-template">
	<div class="container">
		<div class="col-sm-9">
			<p class="h2 text-center" style="margin-bottom:15px;">Get Started</p>
			<p>Interested in my services? I would love to hear from you. Please fill out the following form to give me some information about your project and I will respond within two business days.</p>
			<form name="contact-page-form" method="post" action="get-started-confirmation.php">
				<label for="services" style="display:block; text-align:center;">Services Requested *</label>
				 	<div id="services" class="text-center">
					<div class="checkbox" style="margin-top:0px;">
					  	<label class="checkbox-inline">
							<input type="checkbox" name="service_1" id="service_1" value="yes"> Web Development
						</label>
						<label class="checkbox-inline">
						  	<input type="checkbox" name="service_2" id="service_2" value="yes"> Web Design
						</label>
						<label class="checkbox-inline">
						  	<input type="checkbox" name="service_3" id="service_3" value="yes"> Database Management
						</label>
					</div>
					<div class="checkbox">
					  	<label class="checkbox-inline">
						  	<input type="checkbox" name="service_4" id="service_4" value="yes"> Copywriting / SEO
						</label>
						<label class="checkbox-inline">
						  	<input type="checkbox" name="service_5" id="service_5" value="yes"> E-commerce
						</label>
						<label class="checkbox-inline">
						  	<input type="checkbox" name="service_6" id="service_6" value="yes"> Analytics
						</label>
					</div>
				</div>
				<div class="col-sm-6 form-group" style="padding-left:0px; clear:both;">
	    			<label for="first_name">First Name *</label>
	    			<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
	  			</div>
	  			<div class="col-sm-6 form-group" style="padding-left:0px;">
	    			<label for="last_name">Last Name *</label>
	    			<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
	  			</div>
	  			<div class="col-sm-6 form-group" style="padding-left:0px;">
	    			<label for="email">Email *</label>
	    			<input type="email" class="form-control" name="email" id="email" placeholder="Email">
	  			</div>
	  			<div class="col-sm-6 form-group" style="padding-left:0px;">
	    			<label for="phone">Phone</label>
	    			<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
	  			</div>
	  			<div class="col-sm-6 form-group" style="padding-left:0px;">
				 	<label for="budget">Budget</label>
				  	<select class="form-control" name="budget" id="budget">
				    	<option>--Select--</option>
				    	<option>>$1,000</option>
				  		<option>$1,000 - $ 3,000</option>
				  		<option>$3,000 - $5,000</option>
				  		<option>$5,000 - $10,000</option>
				  		<option>+$10,000</option>
	  				</select>
				</div>
				<div class="col-sm-6 form-group" style="padding-left:0px;">
	    			<label for="business_category">Business Category</label>
	    			<input type="text" class="form-control" name="business_category" id="business_category" placeholder="e.g. restaurant, photography">
	  			</div>
				<div class="col-sm-12 form-group" style="padding-left:0px;">
  					<label for="summary">Project Summary:</label>
  					<textarea class="form-control" rows="5" name="summary" id="summary"></textarea>
				</div>
				<input type="submit" class="button orange-button center-block m-vert-20" style="display:block;" value="Submit">
			</form>
		</div>
		<div class="col-sm-3 text-center">
			<p class="h2 hidden-xs">Contact</p>
			<p>Have a question or need to contact me for purposes other than web services?</p>
			<button href="#contact-modal" data-toggle="modal" class="button orange-button center-block m-vert-20" style="display:block;">Click Here</button>
			 <ul class="hidden-xs">
               <li><p><i class="fa fa-github-square"></i> <a href="https://github.com/mjtarter" target="_blank">Github</a></p></li>
               <li><p><i class="fa fa-linkedin-square"></i> <a href="https://www.linkedin.com/in/mjtarter" target="_blank">Linked In</a></p></li>
               <li><p><span class="glyphicon glyphicon-user"></span><a href="about.php"> About Me</a></p></li>
               <li><p><span class="glyphicon glyphicon-briefcase"></span> <a href="portfolio.php">Portfolio</a></p></li>
            </ul>
		</div>
	</div>
</section>

<?php get_footer(); ?>