<?php get_header(); ?>

<div class="container">

    <body>
        <?php
     
    if(have_posts()) : ?>

        <?php while(have_posts())  : the_post(); ?>

            <div class="single_excerpt row">
                <h1 class="mt-3 fs-2 text-center">
                    <?php the_title(); ?>
                    <p class="mt-3 fs-4 text-center">
                        <?php echo get_post_meta($post->ID, 'author', true); ?>
                    </p>
                </h1>

                <div class="offset-2 col-9">
                    <p>
                        <?php the_content(); ?>
                    </p>

                    <button type="button" class="btn btn-dark">
                        <!-- @todo convert to standard slash before publishing -->
                        <a href="<?php echo home_url(); ?>" class="">Return Home</a>
                    </button>

           


        <?php endwhile; ?>

    <?php endif; ?>
    
    <hr>


        
        <?php wp_footer(); ?>
    </body>

    </html>

</div>
