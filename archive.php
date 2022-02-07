<?php
/**
 * The template for displaying archive pages
 *
 */

get_header(); ?>
<main>
	<section class="traitements" id="traitements" style="background-image: url('<?php the_field('traitements_bg'); ?>');">
        <div class="container traitements__container">
            <h2 class="block-title traitements__title">
                <?php the_field('traitements_title'); ?>
            </h2>
            <div class="accordion">
                <?php
					$categories = get_categories(array(
						'orderby' => 'name',
						'order' => 'ASC'
					));
					foreach( $categories as $category ){
						echo '<div class="accordion-item"><h3 class="accordion-item__trigger">' .  $category->name . '</h3>';
						echo '<div class="accordion-item__content"><div class="accordion-item__content-wrap"><ul class="accordion-item__list">';
							if ( have_posts() ) : 
							query_posts('cat=' . $category->cat_ID);
                            
							while (have_posts()) : the_post();
							?>
							<li class="accordion-item__post">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
                            
							<?php 
							endwhile;
							endif; ?>
                            </ul>
                            <div class="accordion-item__img">
                                <img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" alt="">
                            </div> 
						<?php wp_reset_query();              
                        echo '</div></div></div>';
					}
				?>	
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>