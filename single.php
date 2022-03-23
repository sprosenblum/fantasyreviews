<?php get_header(); ?>

    <body>
        <?php
     
    if(have_posts()) : ?>

        <?php while(have_posts())  : the_post(); ?>

            <div class="single_excerpt">
                <h1 class="">
                    <?php the_title(); 
                        
                    ?>
                </h1>
                    <?php the_content(); ?>
            </div>

        <?php endwhile; ?>

    <?php endif; ?>
    <hr>



        
        <?php wp_footer(); ?>
    </body>

</html>

