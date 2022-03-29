<?php get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'materialpress' ), '<span>' . get_search_query() . '</span>' );
                ?></h1>
            </header><!-- .page-header -->

            <?php
            while ( have_posts() ) : the_post();
                /* Make sure the template is your content.php */
                get_template_part('content');

            endwhile;

            the_posts_navigation();

        else :
            /* Show no content found page */
            echo 'Not posts found';

        endif; ?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php get_footer();