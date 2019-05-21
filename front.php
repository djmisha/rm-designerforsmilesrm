<?php
	// Template Name: Home
?>

<?php get_header()?>


<div class="welcome-parallax will-parallax parallax-welcome b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-welcome.jpg">
	<div class="welcome" id="skiptomaincontent">
		<div class="welcome-cta">
			<div class="welcome-logo">
				<?php echo is_front_page() ? '<h1>' : ''; ?>
				<a href="<?php bloginfo('url'); ?>">
					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Designer for Smiles">
				</a>
				<?php echo is_front_page() ? '</h1>' : ''; ?>
			</div>
			<h2><?php the_field('welcome_headline'); ?></h2>
			<?php the_field('welcome_content'); ?>
			<a href="<?php the_field('gallery_button'); ?>" class="button" rel="nofollow" rel="nofollow">Make an Appointment <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-cal.png" alt="icon"></a>
			<a href="<?php the_field('gallery_button'); ?>" class="button" rel="nofollow" rel="nofollow">Smile Gallery <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-photo.png" alt="icon"></a>
		</div>
	</div>
</div> 


<section class="home-aboutus b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-dlogo.png">
	<h2><?php the_field('about_headline'); ?></h2>
	<div class="the-line"></div>
	<?php the_field('about_content'); ?>
</section>

<section class="home-doctor home-doctor-parallax will-parallax b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-curves-red.jpg">
	<div class="doc-content">
		<img data-src="<?php bloginfo('template_directory'); ?>/images/img-doctors.png" alt="doctor" class="doc-image b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
		<div class="doc-quote">
			<?php the_field('doctor_cont'); ?>
		</div>
	</div>
	<div class="doc-buttons">
		<?php if(have_rows('doctor_buttons')): ?>
			<?php while(have_rows('doctor_buttons')): the_row(); ?>
				<a href="<?php the_sub_field('link'); ?>" rel="nofollow" class="button"><?php the_sub_field('name'); ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>	
</section>

<div class="home-featured-procedures">
	<?php if(have_rows('featured_procedures_1')): ?>
		<?php $count = 3; ?>
		<ul>
			<?php while(have_rows('featured_procedures_1')): the_row(); ?>
				<li style="background-image: url('<?php the_sub_field('image'); ?>');" class="wow fadeIn" data-wow-offset="20" data-wow-delay=".<?echo $count; ?>0s" data-wow-duration=".5s" >
					<div class="feat-overlay">
						<div class="feat-links">
							<?php if(have_rows('procedure_links')): ?>
								<?php while(have_rows('procedure_links')): the_row(); ?>
									<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a>
									<?php the_sub_field(''); ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="proced-name">
						<a href="<?php the_sub_field('headline_link'); ?>">
							<?php the_sub_field('headline'); ?>
						</a>
					</div>
				</li>
				<?php $count++; ?>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>






<div class="home-patients b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-patients.jpg">
	<div class="erins-wrappers">
		<div class="the-home-location">
			<h2>Our Location</h2>
			<div class="home-white-wrap">
				<?php if(have_rows('locations', 'option')): ?>
					<?php while(have_rows('locations', 'option')): the_row(); ?>
						<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound" data-label="Address - Footer" target="_blank"  rel="noopener">
							<img src="<?php bloginfo('template_directory'); ?>/images/icon-map.jpg" data-src="" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
							<?php the_sub_field('address', 'option'); ?><br /> 
							<?php the_sub_field('city', 'option'); ?><br />
							<span>Map & Directions</span>
						</a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<a href="<?php bloginfo('url'); ?>/contact-us/" class="button" rel="nofollow">Contact Us</a>
		</div>
	</div>
	<div class="the-results">
		<div class="erins-wrappers">
			<h2>Patient Gallery</h2>
			<div class="home-white-wrap">
				<div class="results-images">
					<img class="b-lazy" data-src="<?php the_field('before_image'); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="results before image">
					<img class="b-lazy" data-src="<?php the_field('after_image'); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="results after image">
				</div>
				<div class="results-images">
					<img class="b-lazy" data-src="<?php the_field('before_image_2'); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="results before image">
					<img class="b-lazy" data-src="<?php the_field('after_image_2'); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="results after image">
				</div>
			</div>	
			<a href="<?php bloginfo('url'); ?>/gallery/" class="button" rel="nofollow">View All</a>
		</div>	
	</div>	
</div>	


<div class="home-featured-breast b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-feature.jpg" >
	<span><?php the_field('breast_feature_subheadline'); ?></span>
	<h2><?php the_field('breast_feature_headline'); ?></h2>
	<?php the_field('breast_feature_content'); ?>
	<a href="<?php the_field('breast_aug_link'); ?>" class="button" rel="nofollow" name="Learn More">Learn More</a>
</div>


<?php get_footer()?>