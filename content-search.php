<?php get_header(); ?>

<div class="searches">

    <div class="row mb-5">
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

</div>

<?php wp_footer(); ?>