<?php

class Query_Args
{
    /**
     * Retrieves arguments for WP_Query.
     *
     * @return array
     */
    public static function prepare($post_type)
    {

        if (!in_array($post_type, Post_Type::getAvailablePostTypes())) return null;

        $args = array(
            "post_type" => $post_type,
            "posts_per_page" => Post_Type::getPostsPerPage(),
            "paged" => Post_Type::getPaged()
        );

        if ($post_type == "events") {
            $events_params =  array(
                'meta_key' => 'data',
                'orderby' => 'meta_value',
                "order" => "DESC",
            );

            $args = array_merge($args, $events_params);
        }

        if ($post_type == "depositions") {
            $depositions_params = array(
                "orderby" => "rand"
            );
            $args = array_merge($args, $depositions_params);
        }

        return $args;
    }
    /**
     * Retrieves arguments for WP_Query on search.
     *
     * @return array
     */
    public static function prepare_search($post_type, $search_result)
    {

        if (!in_array($post_type, Post_Type::getAvailablePostTypes())) return null;

        $args = array(
            "post_type" => $post_type,
            "posts_per_page" => Post_Type::getPostsPerPage(),
            's' => $search_result,
        );

        if ($post_type == "events") :
            $events_params =  array(
                'meta_key' => 'data',
                'orderby' => 'meta_value',
                "order" => "DESC",
            );
            $args = array_merge($args, $events_params);
        endif;

        return $args;
    }
}
