// Double repeater

<?php if( have_rows('success-item') ): ?>
<?php while( have_rows('success-item') ): the_row(); ?>
	<?php if( have_rows('success-item_list') ): ?>
		<ul class="success-item__list">
		<?php while( have_rows('success-item_list') ): the_row(); ?>
			<li class="success-item__content">
				<?php the_sub_field('success-item_text'); ?>
			</li>
		<?php endwhile; ?>
		</ul>
	<?php endif; ?>
	<div class="success-item__bottom">
		<a href="<?php the_sub_field('link'); ?>" class="link success-item__btn">
			<?php the_sub_field('link-name'); ?>
		</a>
	</div>				
<?php endwhile; ?>
<?php endif; ?>


// Repeater
<?php if(get_field('slider')): ?>
<?php while(has_sub_field('slider')): ?>
        <img src="<?php the_sub_field('img'); ?>" class="welcome-item__img" alt="">  
<?php endwhile; ?>
<?php endif; ?>

// Gallery 

<?php
      $gallery = get_field('office-slider');				
      if( $gallery ): ?>	
          <div class="office-slider">			
              <?php foreach( $gallery as $image ): setup_postdata($image); ?>
              <div class="office-slider__item">
                  <div class="office-slider__item-img">
                      <img src="<?php echo $image; ?>" alt="image">
                  </div>
              </div>			
              <?php endforeach; ?>
          </div>
      <?php wp_reset_postdata(); ?>
      <?php endif; 
?>
