<?php get_header(); ?>

<div class="searches">
    <h4>
        <a href="
            <?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>

        <?php echo get_post_meta($post->ID, 'author', true); ?>

        <p class="excerpt mt-3">
            <?php the_excerpt(); ?>
        </p>


    </h4>
</div>

<?php wp_footer(); ?>