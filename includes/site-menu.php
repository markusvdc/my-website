<ul class="menupadrao">
    <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
    <li><a href="<?php echo get_permalink( get_page_by_title( 'Currículo' ) ) ?>">Currículo</a></li>
    <li><a href="<?php echo get_permalink( get_page_by_title( 'Projetos' ) ) ?>">Projetos</a></li>
    <li><a href="<?php echo get_category_link( get_cat_ID( "Portfólio" ) ); ?>">Portfólio</a></li>
    <li><a href="<?php echo get_category_link( get_cat_ID( "Artigos" ) ); ?>">Artigos</a></li>
    <!-- <li><a href="<?php // echo get_category_link( get_cat_ID( "Código" ) ); ?>">Ipsumorem</a></li> -->
</ul>
