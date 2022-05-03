<?php
get_header();

include_once('post-template.php');

?>

    <body>
        <h1 class="text-center mt-3">
            <?php bloginfo( 'name' ); ?>
        </h1>

        <h2 class="text-center mt-3 fs-4 text">
            <?php bloginfo( 'description' ); ?>
        </h2>


        <hr>

        <?php

        $loop = new WP_Query( array(
            'post_type' => 'review',
            'paged' => $paged
        ) );


            while ( $loop->have_posts() ) : $loop->the_post();

                bookRow($post);

            endwhile; ?>
</div>

    <?php get_footer(); ?>

    </body>

</html>