<?php get_header(); ?>

<div class="searches">
    <div class="row mt-2 mb-2">
        <div class="col-12 text-center text-md-start">
            <p class="item-heading">

                <span class="book-item-name">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </span>
                <!-- render author name onto page -->
                &nbsp;<?php echo get_post_meta($post->ID, 'author', true); ?>
            </p>

            <p class="excerpt mt-3">
                <?php the_excerpt(); ?>
            </p>

        </div>
    </div>

</div>

<?php get_footer(); ?>