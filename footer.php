

<footer>
	
	<section class="upper-footer" >
		<span class="the-headline">Contact Us <span>Today</span>!</span>
		<div class="footer-splitter">
			 <div class="footer-address">
			 	<a href="<?php bloginfo('url'); ?>">
			 		<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/images/logo-footer.png" alt="Logo" class="b-lazy">
			 	</a>
				<?php if(have_rows('locations', 'option')): ?>
					<?php while(have_rows('locations', 'option')): the_row(); ?>
						<div class="the-loc">
							<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound" data-label="Address - Footer" target="_blank"  rel="noopener">
								<!-- <?php the_sub_field('name', 'option'); ?><br> -->
								<?php the_sub_field('address', 'option'); ?><br /> <?php the_sub_field('city', 'option'); ?> 
							</a>
							<div class="loc-phone">
								<a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Footer">
									<?php the_sub_field('phone', 'option'); ?></a>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<div class="footer-social">
					<a href="<?php the_field('facebook','options'); ?>" target="_blank" rel="noopener" title="facebook" aria-label="facebook"><i class="fab fa-facebook"></i></a>
					<a href="<?php the_field('twitter','options'); ?>" target="_blank" rel="noopener" title="twitter" aria-label="twitter"><i class="fab fa-twitter"></i></a>
					<a href="<?php the_field('instagram','options'); ?>" target="_blank" rel="noopener" title="instagram" aria-label="instagram"><i class="fab fa-instagram"></i></a>
					<a href="<?php the_field('youtube','options'); ?>" target="_blank" rel="noopener" title="youtube" aria-label="youtube"><i class="fab fa-youtube"></i></a>
				</div>
			</div> 

			<div class="footer-form">
				<?php echo do_shortcode('[seaforms name="footer-contact-form"]'); ?>
			</div>
		</div>

	</section> 
	
	<section class="footer-map">
		<?php if(have_rows('locations', 'option')): ?>
			<?php while(have_rows('locations', 'option')): the_row(); ?>
				<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound" data-label="Address - Footer">

					<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/images/icon-map.jpg" alt="map icon" class="b-lazy">
				</a>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>

	<section class="lower-footer">
		
		<div class="footer-logos">
			<?php if(have_rows('footer_logos', 'option')): ?>
				<ul>
					<?php while(have_rows('footer_logos', 'option')): the_row(); ?>
						<li>
							<img data-src="<?php the_sub_field('logo'); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" alt="top doc logo">
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
		
		<div class="copyright">Copyright &copy; <?=date("Y")?> <?bloginfo('title');?>. All rights reserved | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a> | <a href="<?php bloginfo('url'); ?>/sitemap/" title="Sitemap">Sitemap</a> </div>  
		<div class="rm-sig"><span> | </span><a href="<?php the_field('rm_footer_link', 'options'); ?>" target="_blank" rel="noopener" title="<?php the_field('rm_footer_text', 'options'); ?>"><?php the_field('rm_footer_text', 'options'); ?></a> by <a href="https://www.rosemontmedia.com/" title="Rosemont Media" target="_blank" rel="noopener"><?php inline_svg('rm-logo'); ?></a></div>

		<?php if(!is_page(array('contact-us'))): ?>
		<div class="sticky-form">
			<span>Contact Us Today!</span>
			<?php echo do_shortcode('[seaforms name="sticky-contact-form"]'); ?>

			<div class="mobile-social">
				<a href="<?php the_field('facebook','options'); ?>" target="_blank" rel="noopener" title="facebook" aria-label="facebook"><i class="fab fa-facebook"></i></a>
				<a href="<?php the_field('twitter','options'); ?>" target="_blank" rel="noopener" title="twitter" aria-label="twitter"><i class="fab fa-twitter"></i></a>
				<a href="<?php the_field('instagram','options'); ?>" target="_blank" rel="noopener" title="instagram" aria-label="instagram"><i class="fab fa-instagram"></i></a>
				<a href="<?php the_field('youtube','options'); ?>" target="_blank" rel="noopener" title="youtube" aria-label="youtube"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
		<?php endif; ?>

	</section>  

</footer>

<?php wp_footer();?>


</body>
</html>