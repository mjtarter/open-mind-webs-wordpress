<?php get_header(); 

//Vars
$image = get_field('image');
$screenshot = get_field('screenshot');
$image_3 = get_field('image_3');?>

<section class="main-content p-vert-50 folio-pages">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 no-float" style="display:table-cell;">
				<p class="h1"><?php the_field('project_title') ?></p>
				<p><a href="<?php the_field('path') ?>" target="_blank"><?php the_field('url') ?></a></p>
				<div class="clearfix">
					<!-- Add comma separated custom field: services_provided into array !-->
					<?php $services_provided = explode(', ', get_field('services_provided')); ?>
					<ul id="services-provided">
						<?php
						    foreach($services_provided as $service) {
						  		echo '<li><span class="glyphicon glyphicon-ok-sign"></span> ' . $service . '</li>';
							} ?>	
					</ul>
				</div>
				<hr>
				<p><?php the_field('description') ?></p>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="hidden-xs hidden-sm col-md-12 img-responsive center-block p-top-15">
			</div>
			<div class="col-sm-6 no-float" id="folio-img-container">
				<img src="<?php echo $screenshot['url']; ?>" alt="<?php echo $screenshot['alt']; ?>" id="folio-main-img" class="img-responsive center-block">
			</div>
		</div>
		<!-- If the optional image and caption exists include it below !-->
		<?php if (get_field('image_3')) : ?> 
			<hr class="hidden-xs hidden-sm">
			<div class="row hidden-xs hidden-sm">
				<div class="col-sm-6 no-float vert-middle">
					<img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>" class="col-xs-12 img-responsive center-block p-top-15">
				</div>
				<div class="col-sm-6 no-float vert-middle">
					<div class="text-center" id="info-box">
						<?php the_field('image_3_caption') ?>
					</div>
				</div>
			</div> 
		<?php endif; ?>
		<!-- End optional content !-->
	</div>
</section>

<?php get_footer(); ?>