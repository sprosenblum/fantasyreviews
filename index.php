<?php get_header();

?>

    <body>
        <h1 class="text-center mt-3">
            <?php bloginfo( 'name' ); ?>
        </h1>

        <h2 class="text-center mt-3 fs-4 text">
            <?php bloginfo( 'description' ); ?>
        </h2>


        <hr>

        <?php

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
</div>


    <hr>

    <?php wp_footer(); ?>

    </body>

</html>