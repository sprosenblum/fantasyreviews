<?php

// used for index.php and for template-category.php as they are the same
function bookRow($post) { ?>

    <div class="row mb-5 mt-5">
        <div class="col-12 col-md-2 mt-4 offset-md-1 d-flex flex-column align-items-center">
            <img
                class="book-img mb-2"
                src="<?php echo get_the_post_thumbnail_url(); ?>"
                alt="Book Image"
            />
        </div>


        <div class="col-12 offset-md-1 col-md-6 text-center text-md-start">
            <h3 class="item-heading mt-4">
                <span class="book-item-name">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </span>

                <p class="book-author mt-2 fs-6">
                    <?php echo get_post_meta($post->ID, 'author', true); ?>
                </p>
            </h3>
            <p class="mt-3">
                <?php the_excerpt(); ?>
            </p>
        </div>

    </div> <!-- .row .mb-5 .mt-5 -->
<?php
}