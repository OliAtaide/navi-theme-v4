<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS()
{
    wp_enqueue_style('normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
add_action('wp_enqueue_scripts', 'add_normalize_CSS');
// Register a new navigation menu
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
        "supports" => ["title", "excerpt", "author", "editor", "thumbnail"],
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

function ajax_script_load_more($args)
{
    //init ajax
    $ajax = false;
    //check ajax call or not
    if (
        !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
    ) {
        $ajax = true;
    }
    //number of posts per page default
    $num = $_POST['postToLoad'];
    //page number
    $paged = $_POST['page'];
    $type = $_POST['type'];

    if (!empty($_POST["cat"])) {
        //args
        $args = array(
            'post_type' => $type,
            'posts_per_page' => $num,
            "cat" => $_POST["cat"],
            'paged' => $paged
        );
    } else {

        //args
        $args = array(
            'post_type' => $type,
            'posts_per_page' => $num,
            'paged' => $paged
        );
    }

    //query
    $query = new WP_Query($args);
    //check
    if ($query->have_posts()):
        //loop articales
        while ($query->have_posts()):
            $query->the_post();
            //include articles template
            include "parts/$type-loop.php";
        endwhile;
    else:
        echo 0;
    endif;
    //reset post data
    wp_reset_postdata();
    //check ajax call
    if ($ajax)
        die();
}
add_action('wp_ajax_nopriv_ajax_script_load_more', 'ajax_script_load_more');
add_action('wp_ajax_ajax_script_load_more', 'ajax_script_load_more');

add_action('wp_ajax_nopriv_ajax_script_load_more', 'ajax_script_load_more');
add_action('wp_ajax_ajax_script_load_more', 'ajax_script_load_more');

function ajax_script_order_by_date($args)
{
    //number of posts per page default
    $num = $_POST['postToLoad'];
    $type = $_POST['type'];
    $ordering = $_POST['ordering'];

    if ($type == "events") {
        $args = array(
            "post_type" => $type,
            'meta_key' => 'data',
            'orderby' => 'meta_value',
            'order' => $ordering,
            "posts_per_page" => $num
        );
    } else {
        $args = array(
            "post_type" => $type,
            'order' => $ordering,
            "posts_per_page" => $num
        );
    }

    //query
    $query = new WP_Query($args);
    //check
    if ($query->have_posts()):
        //loop articales
        while ($query->have_posts()):
            $query->the_post();
            //include articles template
            include "parts/$type-loop.php";
        endwhile;
    else:
        echo 0;
    endif;
    //reset post data
    wp_reset_postdata();

    die();
}

add_action('wp_ajax_nopriv_ajax_script_order_by_date', 'ajax_script_order_by_date');
add_action('wp_ajax_ajax_script_order_by_date', 'ajax_script_order_by_date');

function ajax_script_filter_by_category($args)
{
    //number of posts per page default
    $num = $_POST['postToLoad'];
    $type = $_POST['type'];
    $categories = $_POST['categories'];

    if ($categories) {
        $args = array(
            "post_type" => $type,
            "category__in" => $categories,
            "posts_per_page" => $num
        );
    } else {
        $args = array(
            "post_type" => $type,
            "posts_per_page" => $num
        );
    }

    //query
    $query = new WP_Query($args);
    //check
    if ($query->have_posts()):
        //loop articales
        while ($query->have_posts()):
            $query->the_post();
            //include articles template
            include "parts/$type-loop.php";
        endwhile;
    else:
        echo 0;
    endif;
    //reset post data
    wp_reset_postdata();

    die();
}

add_action('wp_ajax_nopriv_ajax_script_filter_by_category', 'ajax_script_filter_by_category');
add_action('wp_ajax_ajax_script_filter_by_category', 'ajax_script_filter_by_category');