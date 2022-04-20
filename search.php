<?php get_header(); ?>

<div class="search-result">
    <div class="container">
        <div class="row">
            <div class="search">
                <?php
                if (have_posts() && $_GET['s'] != '') : ?>
                    <h2>Search Result For: <?php the_search_query(); ?></h2>
                    <div class="light-separator small center"></div>

                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('content-search', get_post_format());

                    endwhile;
                else :
                    echo '
                    <div class="no-content mt-3 text-center">
                        <h3>Oops, looks like nothing matches your result.</h3>
                    </div>';

                endif;
                ?>
                <div class="search-form mt-3 text-center">
                    <?php get_search_form(); ?>
                    <div class="text-center mt-3">
                        <a href="<?php echo home_url(); ?>" class="btn btn-dark">Return Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <?php wp_footer(); ?>