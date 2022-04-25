<?php get_header(); ?>

<div class="container">

    <body>

    <?php


    if(have_posts()) :

        while(have_posts())  : the_post(); ?>

            <div class="row mb-5 mt-5">
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


                                <?php
                                    $category = get_the_category(get_post_meta($post->ID, 'category'));

                                    if ($category && $category[0]) { ?>

                                        <p class="single-category">
                                        Category:
                                            <a href="/bookreviews/category-custom-page/?category=<?php echo $category[0]->term_id; ?>
                                            ">
                                                <?php print_r( $category[0]->name ); ?>
                                            </a>
                                        </p>
                                    <?php } ?>

                        </div>
                </div>
                        <div class="text-center">
                            <a href="<?php echo home_url(); ?>" class="btn btn-dark">Return Home</a>
                        </div>

            </div>


        <?php endwhile; ?>

    <?php endif; ?>

    <hr>


    <?php wp_footer(); ?>

    </body>

    </html>

</div>
