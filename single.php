<?php get_header(); ?>

<div class="container">

    <body>

    <?php

    if(have_posts()) : ?>

        <?php while(have_posts())  : the_post(); ?>

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
                                    <?php the_title(); ?>
                                </span>

                                    <!-- render author name onto page -->
                                <p class="book-author mt-2 fs-5">
                                    <?php echo get_post_meta($post->ID, 'author', true); ?>
                                </p>

                            </h3>

                            <p class="mt-3">
                                <?php the_content(); ?>
                            </p>

                        </div>
                </div>
                        <button type="button" class="btn btn-dark">
                            <a href="<?php echo home_url(); ?>" class="">Return Home</a>
                        </button>

            </div>


        <?php endwhile; ?>

    <?php endif; ?>

    <hr>


    <?php wp_footer(); ?>

    </body>

    </html>

</div>
