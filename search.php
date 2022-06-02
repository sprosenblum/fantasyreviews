<?php get_header(); ?>

<div class="search-result">
    <div class="container">
        <div class="row">
            <div class="search text-center">
                <?php
                if (have_posts() && $_GET['s'] != '') : ?>
                    <h2 class="mt-3 mb-3">Search Result For: <?php the_search_query(); ?></h2>
                    <div class="light-separator small center"></div>

                    <?php
                    while (have_posts()) : the_post();

                        get_template_part('content-search', get_post_format());

                    endwhile;
                else :
                    echo '
                    <div class="no-content mt-3 text-center">
                        <h3>Oops, looks like nothing matches your search query.</h3>
                    </div>';

                endif;
                ?>

                <a href="<?php echo home_url(); ?>" class="btn btn-dark mt-3">Return Home</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>