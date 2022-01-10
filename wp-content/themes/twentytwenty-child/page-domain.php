
<?php
/*
Template name: Domain
*/
get_header(); ?>

<div id="domain">
    <h3> Field of search </h3>

    <div id="field">
        <?php
            // the query
            $all_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'category_name' => 'nom_domaine'  ));

            if ( $all_posts->have_posts() ) :
            ?>

        <?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
            <div class="field">
                <div class='img-domain'><?php the_post_thumbnail(); ?></div>
                <h4><?php the_title() ?></h4>
                <p><?php the_excerpt(); ?></p>
                <div class='read-more'><a href='<?php the_permalink(); ?>'>Read More</a></div>

            </div>
        <?php endwhile; ?>

        <?php else : ?>
        <p><?php _e( 'Sorry, no posts were found.' ); ?></p>

        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>
