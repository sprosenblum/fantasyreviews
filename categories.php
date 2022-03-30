<?php
/**
 * Template Name: Categories Page
**/

get_header(); ?>

    <!-- content -->
    <div id="content">

        <ul class="category-list">
            <?php wp_list_categories( 'title_li=' ); ?>
        </ul>

    </div>
    <!-- / content -->

<?php get_footer();
