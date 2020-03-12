<?php

add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit.php?post_type=page' );
    remove_menu_page( 'edit.php?post_type=acf-field-group' );
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page( 'themes.php' );
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'plugins.php' );
}

// importa components
require_once(get_template_directory() . '/custom/Autores.php');
require_once(get_template_directory() . '/custom/Videos.php');
require_once(get_template_directory() . '/custom/Podcasts.php');
// habilitar suporte de thumbnail
add_theme_support( 
'post-thumbnails', array(
    'autores',
    'video',
    'podcast'
));
// cria um tipo de taxonomia junto ao conteudo personalizado
add_action('init', 'cc_customTaxonomy');
function cc_customTaxonomy()
{
    // variaveis locais para customização do conteúdo
    $singleTag   = 'Temas';
    $pluralTag   = 'Temas';

    register_taxonomy(
        $singleTag,
        array('video', 'podcast'),
        array(
            'label' => __($singleTag),
            'rewrite' => array('slug' => strtolower($singleTag)),
            'hierarchical' => true,
            'show_in_rest' => true,
            // 'show_in_graphql' => true,
            // 'graphql_single_name' => strtolower($singleTag),
            // 'graphql_plural_name' => strtolower($pluralTag),
        )
    );
    register_taxonomy(
        'Tags',
        array('video', 'podcast'),
        array(
            'label' => __('Tags'),
            'rewrite' => array('slug' => strtolower('tags')),
            'hierarchical' => true,
            'show_in_rest' => true,
            // 'show_in_graphql' => true,
            // 'graphql_single_name' => strtolower($singleTag),
            // 'graphql_plural_name' => strtolower($pluralTag),
        )
    );
}