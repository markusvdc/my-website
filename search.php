<?php get_header(); ?>
<?php include 'includes/site-filtro.php';?>
<?php
if ( have_posts() ) :
    ?>
<div class="feed">
    <div class="container">
        <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'entry' );
        endwhile;
        ?>
        <?php
        // get_template_part( 'pagination' );
        ?>
    </div>
</div>
<?php
else :
?>
<div class="mensagem">
    <div class="container">
        <h2>Nenhum resultado encontrado.</h2>
        <p>Tente novamente com outros termos.</p>
    </div>
</div>
<?php
endif;
?>
<?php get_footer(); ?>
