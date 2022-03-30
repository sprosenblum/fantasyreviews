<!DOCTYPE html>
<html>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
            <title><?php wp_title( '|', true, 'right' ); ?></title>
            <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    </head>


    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    <a class="nav-link" href="#">Authors</a>
                    <a class="nav-link" href="#">Young-Adult</a>
                    <a class="nav-link" href="#">Adult</a>
                </div>
            </div>
        </div>

        <form class="d-flex ">
                <?php get_search_form(); ?>
            </form>

    </nav>

    <?php wp_head(); ?>