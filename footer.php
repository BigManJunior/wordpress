<!-- FOOTER -->

	<footer class="footer" data-aos="new-animation">
		<div class="container footer__container">
			<?php the_custom_logo(); ?>	
			<p><?php the_field('footer_text_1', 'option'); ?></p>
			<p><?php the_field('footer_text_2', 'option'); ?><a href="#" target="blank"><?php the_field('footer_company', 'option'); ?></a></p>
			<p><a href="<?php echo get_privacy_policy_url(); ?>"><?php the_field('footer_police', 'option'); ?></a></p>
		</div>
	</footer>					
    <?php wp_footer(); ?>

</body> 
</html>