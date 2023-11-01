<?php

include_once "class-query-args.php";

class Post_Type
{

    /**
     * Global class attributes.
     *
     */
    static $available_post_types = [];
    static $posts_per_page = 6;
    static $paged = 1;

    /**
     * Set available post types.
     *
     * @return void
     */
    public static function setAvailablePostTypes()
    {
        $params = array(
            'public' => true,
            '_builtin' => false
        );

        self::$available_post_types = get_post_types($params, 'names');
    }

    /**
     * Set number of posts per page.
     *
     * @return void
     */
    public static function setPostsPerPage($number)
    {
        self::$posts_per_page = $number;
    }

    public static function setPaged()
    {
        self::$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    }

    /**
     * Retrieve available posts.
     *
     * @return array
     */
    public static function getAvailablePostTypes()
    {
        return self::$available_post_types;
    }

    /**
     * Retrieve number of posts per page.
     *
     * @return int
     */
    public static function getPostsPerPage()
    {
        return self::$posts_per_page;
    }

    public static function getPaged(){
        return self::$paged;
    }

    /**
     * Display a picked number of post types.
     */
    public static function display($post_type, $number_of_posts)
    {
        try {

            self::setAvailablePostTypes();
            self::setPostsPerPage($number_of_posts);
            self::setPaged();

            echo '<script>console.log(' . self::getPaged() . ')</script>';

            $args = Query_Args::prepare($post_type);

            if (!empty($args)):
                $wp_query = new WP_Query($args);
            else:
                return;
            endif;

            if ($wp_query->have_posts()):
                while ($wp_query->have_posts()):
                    $wp_query->the_post();
                    $theme = get_template_directory();
                    include $theme . "/parts/{$post_type}-loop.php";
                endwhile;
            endif;
        } catch (Exception $e) {
            echo 'Exceção capturada: ' . $e->getMessage() . "\n";
        }
    }

    /**
     * Display a picked number of post type in carousel.
     */
    public static function display_in_carousel($post_type, $number_of_posts)
    {
        try {
            self::setAvailablePostTypes();
            self::setPostsPerPage($number_of_posts);

            $args = Query_Args::prepare($post_type);

            if (!empty($args)):
                $query = new WP_Query($args);
            else:
                return;
            endif;

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    $theme = get_template_directory();
                    include $theme . "/parts/carousel/{$post_type}-loop.php";
                endwhile;
            endif;
        } catch (Exception $e) {
            echo 'Exceção capturada: ' . $e->getMessage() . "\n";
        }
    }

    /**
     * Display a picked number of post types searched by its title.
     */
    public static function display_search_results($post_type, $search_result, $number_of_posts)
    {
        try {

            self::setAvailablePostTypes();
            self::setPostsPerPage($number_of_posts);

            $search_args = Query_Args::prepare_search($post_type, $search_result);

            $wp_query = new WP_Query($search_args);

            if ($wp_query->found_posts > 1):
                while ($wp_query->have_posts()):
                    $wp_query->the_post();
                    $theme = get_template_directory();
                    include $theme . "/parts/{$post_type}-loop.php";
                endwhile;
            endif;

            if ($wp_query->found_posts == 1):
                $theme = get_template_directory();
                include $theme . "/parts/{$post_type}-loop.php";
            endif;
        } catch (Exception $e) {
            echo 'Exceção capturada: ' . $e->getMessage() . "\n";
        }
    }
}