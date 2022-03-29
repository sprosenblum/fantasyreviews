<?php get_header(); ?>

    <body>
        <h1 class="text-center mt-3">
            <?php bloginfo( 'name' ); ?>
        </h1>

        <h2 class="text-center mt-3">
            <?php bloginfo( 'description' ); ?>
        </h2>


        <hr>

        <?php

        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        $loop = new WP_Query( array(
            'post_type' => 'review',
            // 'posts_per_page' => 2,
            'paged' => $paged
        ) );

        while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="row mb-5">
                <div class="col-12 col-md-2 offset-md-1 d-flex flex-column align-items-center">
                <img
                    class="book-img mb-2"
                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt="Book Image"
                />
                </div>

                <div class="col-12 offset-md-1 col-md-6 text-center text-md-start">
                    <h3 class="item-heading">

                        <span class="book-item-name">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            </a>
                        </span>

                            <!-- render author name onto page -->
                        <p class="book-author mt-2 fs-5">
                            <?php echo get_post_meta($post->ID, 'author', true); ?>
                        </p>

                    </h3>

                    <p class="excerpt mt-3">
                        <?php the_excerpt(); ?>
                    </p>

                </div>
            </div>


    <?php endwhile; ?>

    <!-- working here on post pagination to make it work -->




    <div class="pagination">
    <?php
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $loop->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
    ?>
</div>


    <hr>

    <?php wp_footer(); ?>

    </body>

</html>