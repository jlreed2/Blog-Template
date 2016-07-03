<?php get_header(); ?>

<!--Begin Section Container -->
<section class="row">
    <div class="nine columns">

        <!--Begin Loop-->
        <?php if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
                <div class="row">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="three columns index-thumbnail">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <?php } ?>
                        <div class="nine columns excerpt">

                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Continue Reading...</a>
                        </div>
                </div>
                <div class="row">
                    <div class="four columns">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    </div>
                    <div class="four columns">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    </div>
                    <div class="four columns">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    </div>
                </div>
            <?php
            }
        }
        ?>
        <!--End Loop-->
    </div>
    <div class="three columns">
        <?php dynamic_sidebar('index-sidebar-widget'); ?>
    </div>
</section>

<?php get_footer(); ?>