<?php get_header(); ?>

<!--Begin Section Container -->
<section class="row">
    <div class="nine columns">

        <!--Begin Loop-->
        <?php if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                $loopcounter++;
                if ($loopcounter == 1) { ?>
                <div class="row primary">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <h5><?php the_time('F jS, Y') ?></h5>
                        <div class="three columns index-thumbnail">
                            <?php if ( has_post_thumbnail() ) { ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <?php } ?>
                        <div class="nine columns excerpt">
                            <?php the_excerpt(); ?>
                            <a class="continue" href="<?php the_permalink(); ?>">Continue Reading...</a>
                        </div>
                </div>
            <?php
            }
        }
    }
        ?>
        <!--End Loop-->
        
        <div class="row">
            <div class="twelve columns">
                <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                    the_post(); 
                    $loopcounter++;
                    if ($loopcounter >= 2 ) { ?>
                    <div class="four columns secondary">
                        <?php if ( has_post_thumbnail() ) { ?>
                        <?php the_post_thumbnail('thumbnail'); }?>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <h5><?php the_time('F jS, Y') ?></h5>
                    </div>
                <?php } 
                    }
                }?>
            </div>
        </div>
    </div>
    <div class="three columns sidebar">
        <?php get_sidebar(); ?>
    </div>
</section>

<?php get_footer(); ?>