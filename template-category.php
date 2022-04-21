<?php

get_header();

/**
* Template Name: Category Custom Page
*/

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <hr>

    <?php

    $categoryId = get_query_var('category');
    // Test if the query exists at the URL
    if ( !$categoryId ) {

        // if category is NOT set redirect to 404 page
        wp_redirect('/bookreviews/404');

        exit;

    }



    $args = array( 'category' => $categoryId, 'post_type' =>  'review' );
    $postslist = get_posts( $args );

    foreach ($postslist as $post) :  setup_postdata($post); ?>

        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <?php the_excerpt(); ?>
    <?php
    endforeach;
    ?>

    <hr>


    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php wp_footer(); ?>