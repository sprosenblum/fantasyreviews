<?php get_header(); ?>

<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Not Found', 'fantasyreviews' ); ?></h1>
            </header>

            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'fantasyreviews' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'fantasyreviews' ); ?></p>

                    <?php get_search_form(); ?>

                    <button type="button" class="mt-5 btn btn-dark">
                        <a href="<?php echo home_url(); ?>" class="">Return Home</a>
                    </button>

                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>