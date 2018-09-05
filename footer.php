        <?php
            include 'includes/site-pesquisar.php';
        ?>
        <footer class="rodape">
            <div class="container">
                <div class="social-rodape">
                    <?php include 'includes/site-social.php';?>
                </div>
                <div class="menu-rodape">
                    <?php include 'includes/site-menu.php';?>
                </div>
                <div class="menu2-rodape">
                    <ul>
                        <li>contato@markusvdc.com</li>
                        <li>(16) 99330.7018</li>
                        <li><a class="botao" target="_blank" href="https://api.whatsapp.com/send?phone=5516993307018">Whatsapp</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </main>

    <div id="mmodal">
        <button class="fechar-mmodal">
            <span></span>
            <span></span>
        </button>
        <div class="cent-mmodal">
            <nav class="menu-cent-mmodal">
                <?php
                    include 'includes/site-menu.php';
                ?>
            </nav>
            <div class="social-cent-mmodal">
                <?php
                    include 'includes/site-social.php';
                ?>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri() ?>/assets/js/libs/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/libs/SmoothScroll.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/framework.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/geral.js"></script>

    <?php
    $pagina_atual = $post->post_name;

    if ( is_front_page() && is_home() ) {
        // Default homepage
    } elseif ( is_front_page() ) {
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/home.css">
        <?php
    } elseif ( is_home() || is_search() || is_archive() ) {
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/blog.css">
        <?php
    } elseif ($pagina_atual == "curriculo") {
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/curriculo.css">
        <?php
    } else {
        //everything else
    }
    ?>

    <?php wp_footer(); ?>
    </body>
</html>
