<?php /* Template Name: tous-nos-modeles */ ?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Athena
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main athena-page" role="main">
        <div class="row">
            <?php include ("html/tous-nos-modeles.html")?>
        </div>
        <div class="clear"></div>
        <div class="athena-pagination">
            <?php echo paginate_links(); ?>
        </div>

    </main><!-- #main -->
<!-- #primary -->


<?php get_footer(); ?>

