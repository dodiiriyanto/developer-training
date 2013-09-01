<?php get_header(); ?>

    <?php

        if ( have_posts() ) :

            while( have_posts() ) :

                the_post();
                // output post content
                ?>

                    <div <?php post_class(); ?>>

                        <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" class="post-thumb">
                            <?php the_post_thumbnail(); ?>
                        </a>
                        <?php endif; ?>

                        <h2><a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a></h2>

                        <p class="date"><?php the_date(); ?></p>

                        <div class="post-content">
                            <?php the_excerpt(); ?>
                        </div>

                    </div>

                <?php

            endwhile;

            // pagination

        else :

            // no posts found

        endif;
    ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
