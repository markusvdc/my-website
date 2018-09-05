<?php
if (in_category('Medium')) $categoria = "medium";
if (in_category('Tableless')) $categoria = "tableless";
if (in_category('GitHub')) $categoria = "github";
if (in_category('Autônomo')) $categoria = "autonomo";
?>

<div id="post-<?php the_ID(); ?>" class="desk3 note3 tabl4 celh6 item-feed <?php echo $categoria ?>">
    <a href="<?php the_field('link') ?>" target="_blank"></a>
    <span class="icone-feed"><?= file_get_contents(get_template_directory_uri().'/assets/img/icones/'.$categoria.'.svg') ?></span>
    <h3><?php the_title(); ?></h3>
    <div class="tags"><?php the_category( ', ' ); ?></div>
    <date><?php the_time('d.m.y'); ?></date>
</div>
