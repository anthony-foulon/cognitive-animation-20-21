

<?php
/*
Template name: Domaines
Template Post Type: post
*/
get_header(); ?>

    <div id='page-domaine'>
        <div id="presentation" style="display:flex;">
            <div id='head-domain'>
                <div class='img-domain'><?php the_post_thumbnail(); ?></div>
                <h2><?php the_title(); ?></h2>
            </div>
            <?php the_content(); ?>
            <button id='see-experiment' onclick="see_more()">See experiments</button>
        </div>

        <div id="experiment">
            <h2 style='margin-left: 0;'>Experiments</h2>
            <?php
                // the query
                $all_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'category_name' => 'experiment' ) );

                if ( $all_posts->have_posts() ) :
                ?>

            <?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
                <div class="experiment"  >

                    <div class="first-part">
                        <a href="<?php the_permalink(); ?>">
                        <div class="image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        </a>
                        <div class="content-exp">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>

                    <div class="info" id="<?php the_ID() ?>" style='display:none;'>
                        <div class='info-relative'>
                        <h4>Information about the experience</h4>
                        <p><?php the_excerpt(); ?></p>
                        </div>
                        <div id='calendar'>
                            <?php echo do_shortcode('[CP_APP_HOUR_BOOKING id="3"]');?>
                        </div>
                    </div>
                    <div class="more" id="more<?php the_ID() ?>" onclick="read_more(<?php the_ID() ?>)" >Read More</div>
                </div>


            <?php endwhile; ?>

            <?php else : ?>
            <p><?php _e( 'Sorry, no posts were found.' ); ?></p>

            <?php endif; ?>



        </div>

    </div>
<?php
get_footer()
?>
