<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
            <title><?php wp_title( '|', true, 'right' ); ?></title>
            <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
            <?php wp_head(); ?>
    </head>

    
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
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
        <?php wp_footer(); ?>
    </body>

</html>