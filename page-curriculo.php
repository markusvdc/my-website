<?php get_header(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!--
    ==========================================
    Page variables
    ==========================================
    -->

    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

        $title = get_the_title();
        $thumbnail = get_the_post_thumbnail();
        $content = get_the_content();

    endwhile; endif;
    ?>

    <!--
    ==========================================
	Start HTML
	==========================================
    -->

    <div class="resumo">
        <div class="container">
            <p>Trabalho como desenvolvedor front-end há mais de 7 anos, especializado em HTML, SASS, jQuery, Responsive Web Design, Cross-browser e Wordpress. Brasileiro, solteiro, 26 anos, Jd. Nova Aliança - Sul Ribeirão Preto / SP.</p>
        </div>
    </div>

    <div class="formacao">
        <div class="container">
            <div class="texto-formacao">
                <p><span>Formação</span>Bacharel em Sistemas de Informação - UNAERP</p>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/curriculo-formacao.png" alt="">
            </div>
        </div>
    </div>

    <div class="conhecimentos">
        <div class="container">
            <h2 class="titulo"><span class="icone-titulo"><?= file_get_contents(get_template_directory_uri().'/assets/img/icones/livro.svg') ?></span>Conhecimentos</h2>
            <div class="row">
                <div class="pad-row desk6 note6 item-conhecimentos">
                    <div class="lista-conhecimentos">
                        <h3>Front-end</h3>
                        <ul>
                            <li>HTML5<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span></span><span></span></div></li>
                            <li>CSS3<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span></span><span></span></div></li>
                            <li>SASS<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span></span><span class="inativo"></span></div></li>
                            <li>Javascript<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span class="inativo"></span><span class="inativo"></span></div></li>
                            <li>jQuery<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span></span><span class="inativo"></span></div></li>
                            <li>Responsive Web Design<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span></span><span></span></div></li>
                            <li>Cross-browser<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span></span><span></span></div></li>
                            <li>Wordpress<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span></span><span class="inativo"></span></div></li>
                            <li>React<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span class="inativo"></span><span class="inativo"></span></div></li>
                        </ul>
                    </div>
                </div>
                <div class="pad-row desk6 note6 item-conhecimentos">
                    <div class="lista-conhecimentos">
                        <h3>Design</h3>
                        <ul>
                            <li>Photoshop<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span></span><span></span></div></li>
                            <li>Illustrator<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span></span><span></span></div></li>
                        </ul>
                        <h3>Outros</h3>
                        <ul>
                            <li>Oracle APEX<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span class="inativo"></span><span class="inativo"></span></div></li>
                            <li>Versionamento GIT e SVN<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span></span><span class="inativo"></span></div></li>
                            <li>Hospedagem<div class="pontos-lista-conhecimentos"><span></span><span></span><span></span><span class="inativo"></span><span class="inativo"></span></div></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="experiencias">
        <div class="container">
            <h2 class="titulo"><span class="icone-titulo"><?= file_get_contents(get_template_directory_uri().'/assets/img/icones/experiencias.svg') ?></span>Experiências</h2>
            <ul class="lista-experiencias">
                <li>
                    <div class="infos-lista-experiencias">
                        <span class="nome-infos-lista-experiencias">Bluestorm Software</span>
                        <span class="periodo-infos-lista-experiencias">04/18 até atualmente</span>
                        <span class="cargo-infos-lista-experiencias">Desenvolvedor Front-end</span>
                    </div>
                    <div class="descricao-lista-experiencias">
                        <p>Técnico em informática técnico em informática técnico em informática técnico em informática informática técnico em informática técnico em informática técnico em informática técnico em técnico em informática técnico em informática técnico em informática técnico em informática.</p>
                    </div>
                </li>
                <li>
                    <div class="infos-lista-experiencias">
                        <span class="nome-infos-lista-experiencias">Labcom Comunicação Total</span>
                        <span class="periodo-infos-lista-experiencias">04/18 até atualmente</span>
                        <span class="cargo-infos-lista-experiencias">Desenvolvedor Front-end</span>
                    </div>
                    <div class="descricao-lista-experiencias">
                        <p>Técnico em informática técnico em informática técnico em informática técnico em informática informática técnico em informática técnico em informática técnico em informática técnico em técnico em informática técnico em informática técnico em informática técnico em informática.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>
<?php get_footer(); ?>
