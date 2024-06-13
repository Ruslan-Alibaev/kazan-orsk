<?php get_header(); ?>

<section>
    <!-- нужно добавить дату еще будет -->
    <div class="container">
        <div class="page__title">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_title(); ?>
            <?php endwhile;
            endif; ?>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>



<?php get_footer(); ?>