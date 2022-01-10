

<?php
/*
Template Name: Article
Template Post Type: post
*/
get_header();?>


<div id="post-experiment">
    <div id="post">

        <h3><?php the_title(); ?></h3>
        <div><h5>Summary/Aim:</h5> <?php the_content(); ?> </div>
        <div id="more-information" style="display: none;">
            <h5>Information about the experiment(method, developement,..)</h5>
            <p>Curabitur vel metus id dui vulputate luctus id vitae justo. Donec quis ultrices nisl. Fusce et facilisis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam efficitur lacus sem, in pulvinar mi gravida id. Donec pellentesque lorem id hendrerit gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer aliquam euismod leo et condimentum. Aliquam vehicula justo at dictum lobortis. Praesent at pulvinar magna.</p>
            
            <div id="list">
            </div>

        </div>

        <button id='make-an-appointment' onclick="make_an_appointment()">Make an Appointement</button>
        <button id="read-more"  onclick="read_more_post()" >Read More</button>
    </div>
</div>
<div id='calendar-experiment'>
    <div id='appointment'>
        <?php echo do_shortcode('[CP_APP_HOUR_BOOKING id="3"]');?>
    </div>
</div>

<?php get_footer(); ?>
