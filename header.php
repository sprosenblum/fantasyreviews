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

                    <a class="nav-link active" aria-current="page" href="
                            <?php echo home_url(); ?>
                            ">Home
                    </a>


                    <a class="nav-link active" href=
                            "/bookreviews/category-custom-page/?category=4">
                            Children
                    </a>


                    <a class="nav-link active" href=
                            "/bookreviews/category-custom-page/?category=2">
                            Young-Adult
                    </a>


                    <a class="nav-link active" href=
                            "/bookreviews/category-custom-page/?category=3">
                            Adult
                    </a>


                    <form class="d-flex" method="get" action="<?php echo home_url( '/' ); ?>">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>


                </div>
            </div>
        </div>

    </nav>

    <?php wp_head(); ?>
