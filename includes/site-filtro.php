<div class="filtro">
    <div class="container">
        <ul>
            <li class="<?php echo (is_category( 'Artigos' )) ? 'ativo' : '' ?>">
                <a href="<?php echo get_category_link( get_cat_ID( "Artigos" ) ); ?>"></a>
                <span class="icone-filtro tam1"><?= file_get_contents(get_template_directory_uri().'/assets/img/icones/artigos3.svg') ?></span>
                <span class="nome-filtro">Artigos</span>
            </li>
            <li class="<?php echo (is_category( 'Portfólio' )) ? 'ativo' : '' ?>">
                <a href="<?php echo get_category_link( get_cat_ID( "Portfólio" ) ); ?>"></a>
                <span class="icone-filtro tam1"><?= file_get_contents(get_template_directory_uri().'/assets/img/icones/monitor.svg') ?></span>
                <span class="nome-filtro">Portfólio</span>
            </li>
            <li class="<?php echo (is_category( 'Código' )) ? 'ativo' : '' ?>" style="display: none;">
                <a href="<?php echo get_category_link( get_cat_ID( "Código" ) ); ?>"></a>
                <span class="icone-filtro tam2"><?= file_get_contents(get_template_directory_uri().'/assets/img/icones/codigo4.svg') ?></span>
                <span class="nome-filtro">Código</span>
            </li>
            <li class="<?php echo (is_home()) ? 'ativo' : '' ?>">
                <a href="<?php echo get_permalink( get_page_by_title( 'Projetos' ) ) ?>"></a>
                <span class="icone-filtro tam2"><?= file_get_contents(get_template_directory_uri().'/assets/img/icones/infinito.svg') ?></span>
                <span class="nome-filtro">Todos</span>
            </li>
        </ul>
        <a href="#pesquisar" class="pesquisar-filtro ancora"><?= file_get_contents(get_template_directory_uri().'/assets/img/icones/lupa.svg') ?></a>
    </div>
</div>
