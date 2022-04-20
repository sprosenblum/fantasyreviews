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
    // $loop = new WP_Query( array(
    //         'post_type' => 'review',
    //         'cat_id' => '2'
    //     ) );

    ?>


    <ul class="young-adult-posts">
	<?php query_posts('cat=2');

    while (have_posts()) : the_post(); ?>
		<li><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></li>
	<?php
    endwhile; ?>

    	<?php wp_reset_query(); ?>
    </ul>


    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php wp_footer(); ?>