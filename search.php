<?php get_header(); ?>

<div class="search-result">
    <div class="container">
        <div class="row">
            <div class="search">
                <?php if (have_posts()) : ?>

                        <h2>Search Result For: <?php the_search_query(); ?></h2>
                        <div class="light-separator small center"></div>

                        <?php
                        while (have_posts()) : the_post();

                            get_template_part('content-search', get_post_format());

                        endwhile;
                        else :
                            echo '
                            <div class="no-content">
                                <h3>Oops, looks like nothing matches your result.</h3>
                            </div>';
                    endif;
                ?>
                <div class="search-form"><?php get_search_form(); ?></div>
            </div>
        </div>
    </div>
</div>

 <?php get_footer(); ?>