<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
    <!-- <link rel="icon" href="<?php // echo get_template_directory_uri() ?>/assets/img/favicon.png"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/inicio.css">
    <?php wp_head(); ?>
</head>
<body
<?php
    if ( is_front_page() ) {
    } else {
        body_class('gpage');
    }
 ?>
    <?php body_class(); ?>
>
    <div class="inicio">
        <div class="wrap-inicio">
        </div>
    </div>
    <div class="logo-inicio">
        <?= file_get_contents('assets/img/logo.svg') ?>
    </div>
    <span class="icone-inicio"></span>
    <header class="cabecalho">
        <div class="container">
            <a class="logo-cabecalho" href="<?php echo get_home_url(); ?>">
                <span>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.jpg" alt="">
                    <!-- <img src="https://dummyimage.com/172x172/000/fff" alt=""> -->
                </span>
            </a>

            <button id="mmenu">
                <span></span><span></span><span></span><span></span>
            </button>

            <div class="social-cabecalho">
                <?php include 'includes/site-social.php';?>
            </div>

            <div class="resumo-cabecalho">
                <h2>Markus Domenegheti</h2>
                <p>Formado em Sistemas de Informação, trabalha como desenvolvedor front-end há 7 anos. Especializado em HTML, SASS, jQuery, Responsive Web Design, Cross-browser e Wordpress.</p>
                <a class="botao" href="<?php echo get_permalink( get_page_by_title( 'Currículo' ) ) ?>">Currículo</a>
                <a class="botao" href="<?php echo get_permalink( get_page_by_title( 'Projetos' ) ) ?>">Projetos</a>
            </div>

            <div class="celular-cabecalho">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/cabecalho-celular.png" alt="">
            </div>
        </div>
    </header>
    <main>
