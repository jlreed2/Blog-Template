<?php get_header(); ?>

<!--Begin Section Container -->
<section class="row">
    <div class="nine columns">

        <!--Begin Loop-->
        <?php $FirstPost = True; ?>
        <?php if ( have_posts() ) {
        //For only first post - Replace while statement with:
            //<?php
                //if ($FirstPost) {
                //echo ('<div class="post firstpost">');
                //$FirstPost = False;
                //} else {
                //echo ('<div class="post">');
                //}
            if ($FirstPost) {
                echo ('<div class="post firstpost">');
                } else {
                $FirstPost = False;
                echo ('<div class="post">');
            } ?>
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
        ?>
        <!--End Loop-->
        
        <div class="row">
            <div class="four columns  secondary">
                <?php if ( has_post_thumbnail() ) { ?>
                    <?php the_post_thumbnail('thumbnail'); }?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <h5><?php the_time('F jS, Y') ?></h5>
            </div>
            <div class="four columns  secondary">
                <?php if ( has_post_thumbnail() ) { ?>
                    <?php the_post_thumbnail('thumbnail'); }?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <h5><?php the_time('F jS, Y') ?></h5>
            </div>
            <div class="four columns  secondary">
                <?php if ( has_post_thumbnail() ) { ?>
                    <?php the_post_thumbnail('thumbnail'); }?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <h5><?php the_time('F jS, Y') ?></h5>
            </div>
        </div>
    </div>
    <div class="three columns sidebar">
        <?php get_sidebar(); ?>
    </div>
</section>

<?php get_footer(); ?>