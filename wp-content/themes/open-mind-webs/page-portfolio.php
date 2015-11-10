<?php 
/**
 * Template Name: Portfolio Page
 */
get_header(); ?>

<?php get_template_part('partial', 'contact_form_modal'); ?>

<?php 
	$args = array(
    	'post_type' => 'portfolio',
			'posts_per_page' => -1,
	);
	$category_custom_values = array();
	
	$query = new WP_query($args);
?>

<!-- Add all 'category' custom field values into array !-->
<?php if ($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
	<?php foreach (get_post_custom_values('category') as $category_value ) $category_custom_values[] = $category_value ?> 
<?php endwhile; endif; wp_reset_postdata(); ?>

<!-- Strip non unique values from the array !-->
<?php $category_values = array_unique($category_custom_values); ?>
<!-- Add the unique values into new array !-->
<?php $unique_category_values = array_values($category_values); ?>

<div class="bg">
	<!-- Begin Hero !-->
	<div class="jumbotron text-center" id="portfolio-jumbo">
		<div class="container">
			<div class="jumbo-wrapper">
				<p class="h1"><b>View My Latest Work</b></p>
				<hr>
				<p class="hidden-xs"><b>Big or small projects. Responsive, static, simple, or complex websites.</b></p>
				<p class="hidden-xs"><b>You name it, I can help.</b></p>
				<a href="#<?php echo $unique_category_values[0] ?>"><button class="button orange-button">Websites</button></a>
				<a href="#<?php echo $unique_category_values[2] ?>"><button class="button orange-button">DBMS</button></a>
				<a href="#<?php echo $unique_category_values[3] ?>"><button class="button orange-button">Copywriting</button></a>
			</div>
		</div>
	</div>
	<!-- End Hero !-->

	<!-- Loop through each of the unique category values and output each portfolio piece that shares the same category in serparate divs !-->
	<?php $i = 0; foreach ($unique_category_values as $category) : ?>
		<?php if ($i % 2 == 0) echo '<section class="tan-bg">'; else echo '<section class="orange-bg">';?>
			<div class="container">
				<div class="row" id="<?php echo $category ?>">
					<p class="text-center h1 portfolio-titles"><?php echo $category ?></p>
					<?php if ($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>	
						<?php if( get_field(category) == $unique_category_values[$i] ): ?> 
							<?php if( get_field(layout) != 'Full Page' ): ?>
								<div class="col-sm-6">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_field('image') ?>" alt="responvive website" class="img-responsive center-block"></a>
									<p class="h3 text-center"><a href="<?php the_permalink(); ?>"><?php the_field('project_title') ?></a></p>
									<p><?php echo custom_field_excerpt(); ?></p>
								</div>
							<?php else : ?>
								<div class="col-sm-6">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_field('image') ?>" alt="responvive website" class="img-responsive center-block"></a>
								</div>
								<div class="col-sm-6">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_field('image_2') ?>" alt="responsive website" class="img-responsive center-block"></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<p class="h3 text-center"><a href="<?php the_permalink(); ?>"><?php the_field('project_title') ?></a></p>
									<p><?php echo custom_field_excerpt(); ?></p>
								</div>
							<?php endif; ?>
						<?php endif; ?>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
		<?php $i++; ?>
	<?php endforeach; ?>
</div>

<?php get_footer(); ?>