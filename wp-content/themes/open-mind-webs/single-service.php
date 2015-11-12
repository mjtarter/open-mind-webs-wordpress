<?php get_header(); ?>

<section class="main-content services-template">
	<div class="container p-vert-50">
		<div class="col-sm-push-8 col-sm-4">
			<!-- Begin Mobile Services Nav !-->
			<form name="services-dropdown" class="visible-xs text-center">
				<p class="title h4">Services:
				<select id="services" style="width:90%;" name="menu" onChange="top.location.href = this.form.menu.options[this.form.menu.selectedIndex].value;return false;">
					
					<!-- Set the current service being displayed as the first option !-->
					<?php if (have_posts()) : while (have_posts()) : the_post(); 
						$current_service = get_field('service'); 
						$current_permalink = get_the_permalink();?>

						<option><?php echo $current_service ?> </option>
					<?php endwhile; endif; ?>	

					<?php 
						$args = array(
				        	'post_type' => 'service',
		         			'posts_per_page' => -1,
						);
						$query = new WP_query($args);
					?>
					
					<!-- Output all services as options except for the current service being displayed on the page (displayed above)!-->
					<?php if ($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
						<?php if (get_field('service') != $current_service) echo '<option value="' . get_the_permalink() .'">' . get_field('service') . '</option>';?>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</select></p>
			</form>
			<!-- End Mobile Services Nav !-->

			<!-- Begin Desktop Services Nav !-->
			<ul class="hidden-xs" id="services">
				<li class="title h3 m-0">Services</li>
					
				<?php if ($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
					<!-- Set active class for current service !-->
					<a href="<?php the_permalink(); ?>"><li <?php if ($current_permalink == get_the_permalink())  echo 'class="active"'; else echo 'id="' . get_field('service') . '" onMouseOver=\'bgChange("' . get_field('service') . '")\' onMouseOut=\'bgChangeBack("' . get_field('service') . '")\''?>><?php the_field('service') ?></li></a>
				<?php endwhile; endif; wp_reset_postdata(); ?>

			</ul>
			<!-- End Desktop Services Nav !-->
		</div>
		
		<!-- Begin Service Main Content !-->
		<div class="col-sm-pull-4 col-sm-8">	
			<?php if (have_posts()) : while (have_posts()) : the_post();
				//Vars
				$icon = get_field('icon'); ?>

				<h1 class="m-0 text-center"><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" class="hidden-xs"> <?php the_field('service') ?></h1>
				<p style="padding-top:20px;"><?php the_field('description') ?></p>
				<button onclick="window.location.href='get_template_directory_uri()/contact'" style="display:block;" class="button lg-button orange-button center-block m-vert-20">Get Started Now</button>
			<?php endwhile; endif; ?>
		</div>
		<!-- End Service Main Content !-->
	</div>
</section>

<?php get_footer(); ?>