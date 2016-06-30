<?php get_header(); ?>

<!--Begin Section Container -->
<section class="row">
    <div class="nine columns">

        <!--Begin Loop-->
        <?php if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
                <div class="row">
                    <div class="three columns index-thumbnail">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <?php } ?>
                    <div class="nine columns">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
            <?php
            }
        }
        ?>
        <!--End Loop-->
    </div>
    <div class="three columns">
        <h3>Side Crap</h3>
    </div>
</section>

<?php get_footer(); ?>
