<?php
/**
 * Template Name: Demo
 *
 * This is a custom template for use as a demo page.
 *
 * @package Starter_Theme
 */

get_header(); ?>

<section id="primary" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'themeTextDomain' ) . '</span>', 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_footer(); ?>