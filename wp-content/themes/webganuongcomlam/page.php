<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="box_collect_indexx">
                <h3><?php the_title() ?></h3>
            </div>
    <?php
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>