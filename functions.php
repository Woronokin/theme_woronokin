<?php

add_action('wp_enqueue_scripts', 'head_wtheme');
add_action('wp_footer', 'scripts_wtheme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('after_setup_theme', 'logo_change_wtheme');

function logo_change_wtheme()
{
    add_theme_support('custom-header', array(
        'width'         => 45,
        'flex-width'    => false,
        'uploads'       => true,

    ));
}

function theme_register_nav_menu()
{
    register_nav_menu('top', 'Header Menu');
}

function head_wtheme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    // wp_enqueue_style('style-fa', get_template_directory_uri() . '/assets/css/fontawesome.min.css' );
    // wp_enqueue_style('style-fa-brands', get_template_directory_uri() . '/assets/css/brands.min.css' );
    wp_enqueue_script('prefixfree', get_template_directory_uri() . '/assets/js/prefixfree.min.js');
    wp_enqueue_script('jquery');
}


function scripts_wtheme()
{
    // wp_enqueue_script('prefixfree', get_template_directory_uri() . '/assets/js/prefixfree.min.js' );
}

// Включает поддержку широкого выравнивания для картинок у блоков Гутенберга
add_theme_support('align-wide');

// Эта функция позволит плагинам и темам изменять метатег <title>. Эта возможность будет использоваться вместо wp_title().
add_theme_support('title-tag');

// Включение миниатюр записей и страниц
add_theme_support('post-thumbnails');

// Регистрация миниатюры кастомного размера

add_image_size('post_thumb', 800, 400, [ 'center', 'center' ]);

// Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter('get_the_archive_title', function ($title) {
    return preg_replace('~^[^:]+: ~', '', $title);
});

// Удаляет "Рубрика: ", "Метка: " и т.д. из статьи
add_filter('the_tags', function ($the_tags) {
    return preg_replace('~^[^:]+: ~', '', $the_tags);
});

// Изменение длины обрезаемого текста в категории
add_filter( 'excerpt_length', function(){
	return 20;
} );

// Удаление конструкции [...] в конце обрезаемого текста в категории

add_filter( 'excerpt_more', function( $more ) {
	return '<span class="yellow"> ...</span>';
} );

// Цвета для редактора контента
add_theme_support('editor-color-palette', [
    [
        'name'  => __('yellow', 'domain'),
        'slug'  => 'yellow',
        'color' => '#fff800',
    ],
    [
        'name'  => __('white', 'domain'),
        'slug'  => 'white',
        'color' => '#fff',
    ],
    [
        'name'  => __('purple', 'domain'),
        'slug'  => 'purple',
        'color' => '#4C0063',
    ],
    [
        'name'  => __('dark grey', 'domain'),
        'slug'  => 'dark-grey',
        'color' => '#141414',
    ],
]);
