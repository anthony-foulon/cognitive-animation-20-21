
<?php
get_header()
?>

    <div id='site-content'>
        <header class="entry-title has-text-align-center">
            <div class="entry header-inner section-inner medium">
                <h1>Cognitive Animation</h1>
                <div class='site-description'>Cognitive animation, when the world of neurosciences and psychology is looking for the new manga heroes of tomorrow.</div>
				<div id="introduction"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
           </div>
        </header>
    </div>

    <div id="ethical">

        <div id="ethical-presentation">
            <h2>ETHICAL</h2>
            <h3>INFORMATION</h3>
            <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel metus id dui vulputate luctus id vitae justo. Donec quis ultrices nisl. Fusce et facilisis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam efficitur lacus sem, in pulvinar mi gravida id. Donec pellentesque lorem id hendrerit gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer aliquam euismod leo et condimentum. Aliquam vehicula justo at dictum lobortis. Praesent at pulvinar magna.
            </div>
            <div class='more-info'> More Informations</div>
        </div>

        <div id="message">
            <h3>INFORMED CONSENT</h3>
            <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel metus id dui vulputate luctus id vitae justo. Donec quis ultrices nisl. Fusce et facilisis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            </div>
            <div class='more-info'> More Informations</div>
        </div>

    </div>

    <div id="domain">
        <h3> Field of search </h3>

        <div class="field-content">
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


    <div id="experience">
        <h3>Experiments</h3>

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


<?php
get_footer()
?>
