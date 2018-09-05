<?php get_header(); ?>
<?php include 'includes/site-filtro.php';?>
<div class="feed">
    <div class="container">
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'entry' );
    endwhile; endif;
    ?>
    <?php
    // get_template_part( 'pagination' );
    ?>
    </div>
</div>
<?php get_footer(); ?>
