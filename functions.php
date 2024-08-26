<?php

$base_url = get_template_directory_uri();

function add_styles()
{
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/src/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'add_styles');
function add_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/src/bootstrap/js/bootstrap.bundle.min.js');
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/5513c0ecd8.js');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js');
    wp_enqueue_script('ajax', get_template_directory_uri() . '/ajax.js');
    wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js');
    wp_localize_script('ajax', 'ajaxpagination', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        's' => (isset($_GET['s']) ? $_GET['s'] : '')
    ));
}
add_action('wp_enqueue_scripts', 'add_scripts');

function add_Main_Nav()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
// Hook to the init action hook, run our navigation menu function
add_action('init', 'add_Main_Nav');

function my_function_admin_bar()
{
    return false;
}
add_filter('show_admin_bar', 'my_function_admin_bar');

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function pt_projects()
{
    $labels = array(
        "name" => "Projetos",
        "singular_name" => "Projeto",
        "add_new" => "Adicionar novo projeto",
        "add_new_item" => "Adicionar novo projeto",
        "edit_item" => "Editar projeto",
        "new_item" => "Novo projeto",
        "view_item" => "Ver projeto",
        "view_items" => "Ver projetos",
        "search_items" => "Buscar projeto",
        "not_found" => "Nenhum projeto encontrado",
        "not_found_in_trash" => "Nenhum projeto na lixeira",
        "all_items" => "Todos projetos",
        "uploaded_to_this_item" => "Carregado para este projeto",
        "items_list" => "Lista de projetos",
        "item_updated" => "Projeto atualizado"
    );

    $args = [
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "projetos", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "author", "excerpt", "editor", "thumbnail"],
    ];

    register_post_type('projects', $args);
}
;

function pt_events()
{
    $labels = array(
        "name" => "Eventos",
        "singular_name" => "Evento",
        "add_new" => "Adicionar novo evento",
        "add_new_item" => "Adicionar novo evento",
        "edit_item" => "Editar evento",
        "new_item" => "Novo evento",
        "view_item" => "Ver evento",
        "view_items" => "Ver eventos",
        "search_items" => "Buscar evento",
        "not_found" => "Nenhum evento encontrado",
        "not_found_in_trash" => "Nenhum evento na lixeira",
        "all_items" => "Todos eventos",
        "uploaded_to_this_item" => "Carregado para este evento",
        "items_list" => "Lista de eventos",
        "item_updated" => "Evento atualizado"
    );

    $args = [
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "eventos", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "excerpt", "author", "editor", "thumbnail"],
    ];

    register_post_type("events", $args);
}
;

function pt_edicts()
{
    $labels = array(
        "name" => "Editais",
        "singular_name" => "Edital",
        "add_new" => "Adicionar novo edital",
        "add_new_item" => "Adicionar novo edital",
        "edit_item" => "Editar edital",
        "new_item" => "Novo edital",
        "view_item" => "Ver edital",
        "view_items" => "Ver editais",
        "search_items" => "Buscar edital",
        "not_found" => "Nenhum edital encontrado",
        "not_found_in_trash" => "Nenhum edital na lixeira",
        "all_items" => "Todos editais",
        "uploaded_to_this_item" => "Carregado para este edital",
        "items_list" => "Lista de editais",
        "item_updated" => "Edital atualizado"
    );

    $args = [
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "editais", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "excerpt", "author", "editor", "thumbnail"],
    ];

    register_post_type("edicts", $args);
}

function pt_depositions()
{
    register_post_type(
        "depositions",
        array(
            "labels" => array(
                "name" => "Depoimentos",
                "singular_name" => "Depoimento",
                "add_new" => "Adicionar novo depoimento",
                "add_new_item" => "Adicionar novo depoimento",
                "edit_item" => "Editar depoimento",
                "new_item" => "Novo depoimento",
                "view_item" => "Ver depoimento",
                "view_items" => "Ver depoimentos",
                "search_items" => "Buscar depoimento",
                "not_found" => "Nenhum depoimento encontrado",
                "not_found_in_trash" => "Nenhum depoimento na lixeira",
                "all_items" => "Todos depoimentos",
                "uploaded_to_this_item" => "Carregado para este depoimento",
                "items_list" => "Lista de depoimentos",
                "item_updated" => "Depoimento atualizado"
            ),
            "description" => "Área para registro de todos depoimentos",
            "public" => true,
            "supports" => array("title", "editor")
        )
    );
}

function pt_news()
{
    $labels = array(
        "name" => "Notícias",
        "singular_name" => "Notícia",
        "add_new" => "Adicionar nova notícia",
        "add_new_item" => "Adicionar nova notícia",
        "edit_item" => "Editar notícia",
        "new_item" => "Nova notícia",
        "view_item" => "Ver notícia",
        "view_items" => "Ver notícias",
        "search_items" => "Buscar notícia",
        "not_found" => "Nenhuma notícia encontrado",
        "not_found_in_trash" => "Nenhuma notícia na lixeira",
        "all_items" => "Todas notícias",
        "uploaded_to_this_item" => "Carregado para esta notícia",
        "items_list" => "Lista de notícias",
        "item_updated" => "Notícia atualizado"
    );

    $args = [
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "noticias", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "excerpt", "author", "editor"],
        "taxonomies" => array("category"),
    ];

    register_post_type("news", $args);
}

function create_posttypes()
{
    pt_projects();
    pt_events();
    pt_edicts();
    pt_news();
    pt_depositions();
}
;

function add_features()
{
    create_posttypes();
}

add_action('init', 'add_features');

function remove_default_post_type()
{
    remove_menu_page('edit.php');
}

add_action('admin_menu', 'remove_default_post_type');


function custom_menu_order($menu_ord)
{
    if (!$menu_ord)
        return true;
    return array(
        'index.php',
        // this represents the dashboard link
        'edit.php?post_type=news',
        'edit.php?post_type=page',
        // this is the default page menu
        'edit.php?post_type=events',
        // this is a custom post type menu
        'edit.php?post_type=edicts',
        'edit.php?post_type=projects',
        'edit.php?post_type=depositions',
    );
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');

function create_ACF_meta_in_REST()
{
    $postypes_to_exclude = ['acf-field-group', 'acf-field'];
    $extra_postypes_to_include = ["page"];
    $post_types = array_diff(get_post_types(["_builtin" => false], 'names'), $postypes_to_exclude);

    array_push($post_types, $extra_postypes_to_include);

    foreach ($post_types as $post_type) {
        register_rest_field($post_type, 'ACF', [
            'get_callback' => 'expose_ACF_fields',
            'schema' => null,
        ]);
    }
}
function expose_ACF_fields($object)
{
    $ID = $object['id'];
    return get_fields($ID);
}
add_action('rest_api_init', 'create_ACF_meta_in_REST');

function tn_custom_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'tn_custom_excerpt_length', 999);

function search_result_has_occurency($post_type, $search_result)
{
    //query post type
    $search_args = array(
        "post_type" => $post_type,
        's' => $search_result,
    );

    $query = new WP_Query($search_args);

    if ($query->found_posts > 0) {
        return true;
    } else {
        return false;
    }
}

function display_post_type_on_search($post_type, $search_result, $number_of_posts)
{
    require_once "core/class-post-type.php";

    Post_Type::display_search_results($post_type, $search_result, $number_of_posts);
}

function post_type_has_occurency($post_type)
{
    $default_args = array(
        "post_type" => $post_type,
    );

    $query = new WP_Query($default_args);

    if ($query->found_posts > 0) {
        return true;
    } else {
        return false;
    }
}

function display_post_type_in_carousel_on_windows_reload($post_type, $number_of_posts)
{
    require_once "core/class-post-type.php";

    Post_Type::display_in_carousel($post_type, $number_of_posts);
}

function display_post_type_on_windows_reload($post_type, $number_of_posts)
{
    require_once "core/class-post-type.php";

    Post_Type::display($post_type, $number_of_posts);
}
function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}

function load_news($num)
{
    $posts = [];
    $args = array(
        'post_type' => 'news',
        'posts_per_page' => (wp_doing_ajax() ? $_POST['num'] : $num),
        's' => (wp_doing_ajax() ? $_POST['s'] : (isset($_GET['s']) ? $_GET['s'] : ''))
    );

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()):
        while ($wp_query->have_posts()):
            $wp_query->the_post();
            $posts[] = get_template_part(
                'partials/card-news',
                null,
                array(
                    'post' => $wp_query->post,
                )
            );
        endwhile;
    endif;
    if ($wp_query->max_num_pages > 1) {
        $posts[] = get_template_part(
            'partials/load-more-button',
        );
    }
    wp_reset_postdata();
}

add_action('wp_ajax_load_news', 'load_news');
add_action('wp_ajax_nopriv_load_news', 'load_news');

add_filter('wp_mail_from_name', 'my_mail_from_name');
function my_mail_from_name($name)
{
    return "Núcleo Avançado de Inovação Tecnológica (NAVI)";
}
add_filter('wp_mail_from', 'my_mail_from');
function my_mail_from($email)
{
    return "secretariado@navi.ifrn.edu.br";
}