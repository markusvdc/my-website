<?php get_header(); ?>
<!-- <div class="arquivo">page-home.php</div> -->
<div id="post-<?php the_ID(); ?>" class="feed">
    <div class="container">

    <!--
    ==========================================
    Page variables
    ==========================================
    -->

    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

        $title = get_the_title();

    endwhile; endif;
    ?>

    <!--
    ==========================================
	Start HTML
	==========================================
    -->
    <?php
    $args = array(
        'post_type' => 'post'
    );

    $loop = new WP_Query( $args );
    if( $loop->have_posts() ) :
    ?>
        <?php
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <?php
            // $data['id'] = get_the_ID();
            // $data['title'] = get_the_title();
            ?>
            <?php get_template_part( 'entry' ); ?>
        <?php
        unset($data);
        endwhile;
        ?>
    <?php
    endif;
    ?>
    <div class="desk12 note12 tabl12 celh12 acessar-feed">
        <a class="botao" href="<?php // echo get_permalink( get_page_by_title( 'Posts' ) ) ?>">
            <?php echo file_get_contents(get_template_directory_uri().'/assets/img/icones/mais.svg') ?><span>Mostrar todos</span>
        </a>
    </div>

    </div>
</div>

<?php get_footer(); ?>
