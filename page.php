<?php
/**
 * The template for displaying all page
 *
 */

get_header(); ?>
<main class="main">
	<section class="single-page">
		<div class="container single-page__container">
			<div class="laboratory-wrap">
				<a href="javascript: history.back()" class="laboratory__btn laboratory__btn--single">
					<span><?php echo esc_html("Retour"); ?></span>
				</a>
			</div>
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<nav class="breadcrumbs">','</nav>' );
				}
			?>
			<h1 class="single-page__title">
				<?php the_title(); ?>
			</h1>
			<div class="single__content">
				<?php the_content(); ?>
			</div>
			<div class="laboratory-wrap">
				<a href="#" class="laboratory__btn laboratory__btn--single print-btn">
					<span><?php echo esc_html("Imprimer"); ?></span>
				</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>