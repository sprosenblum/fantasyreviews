<?php get_header(); ?>


    <body>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>
 
        <?php if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
 
                <h3><?php the_title(); ?></h3>
        
                <?php 
                the_content(); 
                wp_link_pages();
                edit_post_link(); ?>
 
        <?php endwhile; ?>
 
        <?php
        if ( get_next_posts_link() ) {
            next_posts_link();
        }
        ?>
        <?php
            if ( get_previous_posts_link() ) {
                previous_posts_link();
            }
        ?>
 
        <?php else: ?>
 
            <p>No posts found. :(</p>
 
        <?php endif; ?>

        <hr>

        <?php 
        $loop = new WP_Query( array( 'post_type' => 'review', 'posts_per_page' => 10 ) ); 

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
                    <?php the_title(); ?> 
                    </span>

                    <!-- render name onto page -->
                    <span class="book-author"> 
                        <?php echo get_post_meta($post->ID, 'author', true); ?>
                    </span>
                </h3>

                <p class="excerpt mt-3">
                    <?php the_excerpt(); ?>
                </p>
                </div>
            </div>

    <?php endwhile; ?>


    <hr>


        
        <?php wp_footer(); ?>
    </body>

</html>