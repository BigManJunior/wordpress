<?php
/**
 * The main template file
 *
 */

get_header(); ?>
<main>
	<section class="single-page">
		<div class="container single-page__container">
			<div class="single__wrap">
				<h1 class="single__title">
					<?php the_title(); ?>
				</h1>
				<?php global $item;
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<nav class="breadcrumbs">','</nav>' );
					}
				?>
				<div class="single-top">
					<a href="javascript: history.back()" class="btn single-top__btn">
						<?php echo esc_html("Retour"); ?>
					</a>
				</div>
			</div>
			<div class="single__content">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>