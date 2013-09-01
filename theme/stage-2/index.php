<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <h1><?php bloginfo( 'name' ); ?></h1>

        <?php

            if ( have_posts() ) :

                while( have_posts() ) :

                    the_post();
                    // output post content
                    ?>

                    <?php
                    // template for single post pages
                    if ( is_single() ) : ?>

                        <div <?php post_class(); ?>>

                            <h2><?php the_title(); ?></h2>

                            <p class="date"><?php the_date(); ?></p>

                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>

                        </div>

                    <?php
                    // template for pages
                    elseif( is_page() ) : ?>

                        <div <?php post_class(); ?>>

                            <h2><?php the_title(); ?></h2>

                            <div class="post-content">
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                            </div>

                        </div>

                    <?php
                    // template for blog listing
                    else : ?>

                        <div <?php post_class(); ?>>

                            <h2><a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a></h2>

                            <p class="date"><?php the_date(); ?></p>

                            <div class="post-content">
                                <?php the_excerpt(); ?>
                            </div>

                        </div>

                    <?php endif; ?>

                    <?php

                endwhile;

                // pagination

            else :

                // no posts found

            endif;
        ?>

    </body>
</html>
