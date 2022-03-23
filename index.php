<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
            <title><?php wp_title( '|', true, 'right' ); ?></title>
            <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
            <?php wp_head(); ?>
    </head>

    
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link" href="#">Disabled</a>
                </div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>


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