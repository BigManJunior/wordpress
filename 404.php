<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ganeval
 */

get_header();
?>
<main class="main">
    <section class="single-page">
        <div class="container single-page__container">
            <div class="single__wrap">
                <h1><?php echo esc_html("404"); ?></h1>
            </div>
            <div class="single__content">
                <h2><?php echo esc_html("PAGE NON TROUVÉE"); ?></h2>
                <p><?php echo esc_html("Que ce soit à cause d'un lien invalide ou d'une mauvaise URL, vous pouvez revenir à l'accueil en cliquant sur le bouton ci-dessous :"); ?></p>
                <div class="laboratory-wrap">
                    <a href="javascript: history.back()" class="laboratory__btn laboratory__btn--single">
                        <span><?php echo esc_html("Retour"); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
    <?php
get_footer();
