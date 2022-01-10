<link rel="stylesheet" href="style-experiment.css">
<?php
/*
Template name: Experiment
*/
get_header(); ?>




<div id="experience">
    <h3>Experiment</h3>

    <div id="block-experiment">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <?php
            // the query
            $all_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'category_name' => 'experiment' ) );

            if ( $all_posts->have_posts() ) :
            ?>

        <?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
            <?php static $count = 0; if ($count == "10") { break; }
            else { ?>

            <div class="first-page-experiment">
                <div class="image-exp">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h4><?php the_title(); ?></h4>
                <div><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>">See the full article</a>
            </div>
        <?php $count++; } ?>
        <?php endwhile; ?>

        <?php else : ?>
        <p><?php _e( 'Sorry, no posts were found.' ); ?></p>

        <?php endif; ?>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div style="text-align:center;padding:2%;">
    <?php for ($x=0; $x <= $count;$x++){
        echo '<span class="dot" onclick="currentSlide($x)"></span> ';};?>
    </div>
</div>

<?php get_footer(); ?>
