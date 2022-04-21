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

    $args = array( 'category' => 2, 'post_type' =>  'review' );
    $postslist = get_posts( $args );

    foreach ($postslist as $post) :  setup_postdata($post); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    <?php
    endforeach;
    ?>


    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php wp_footer(); ?>