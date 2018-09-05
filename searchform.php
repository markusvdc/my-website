<form action="<?php echo home_url( '/' ); ?>" method="get">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <button type="submit" class="search-submit"><?= file_get_contents(get_template_directory_uri().'/assets/img/icones/lupa.svg') ?></button>
</form>
