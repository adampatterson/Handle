<?php

/*
 * It's required that the permalinks be flushed!
 *
 * https://gist.github.com/kasparsd/2924900
 * http://wordpress.stackexchange.com/questions/26388/how-to-create-custom-url-routes
 * https://wordpress.stackexchange.com/questions/58683/how-to-create-a-front-end-user-profile-with-a-friendly-permalink
 *
 * https://codex.wordpress.org/Rewrite_API/add_rewrite_tag
 * https://developer.wordpress.org/reference/functions/add_rewrite_tag/
 * https://codex.wordpress.org/Function_Reference/flush_rewrite_rules
 */

namespace Handle;

class HandleRewrites
{

    /**
     * HandleRewrites constructor.
     */
    public function __construct()
    {
        add_filter('query_vars', array($this, 'rewrite_add_var'));
        add_action('init', array($this, 'rewrite_rule'), 0, 0.1);
        add_action('template_include', array($this, 'rewrite_catch'), 0, 0.1);
    }

    public function rewrite_add_var( $vars )
    {
        $vars[] = 'inventory';
        return $vars;
    }

    /**
     * Rewrite Rule
     */
    public function rewrite_rule()
    {
        add_rewrite_tag('%stock_type%', '([^&]+)');
        add_rewrite_tag('%vehicle_slug%', '([^&]+)');
        add_rewrite_tag('%vehicle_id%', '([0-9]+)');

        // Create custom rules based on the permalink.
        add_rewrite_rule('inventory/new/([^/]*)/([0-9]+)/?',
            'index.php?post_type=inventory&stock_type=new&vehicle_slug=$matches[1]&vehicle_id=$matches[2]', 'top');
        add_rewrite_rule('inventory/used/([^/]*)/([0-9]+)/?',
            'index.php?post_type=inventory&stock_type=used&vehicle_slug=$matches[1]&vehicle_id=$matches[2]', 'top');
    }

    public function rewrite_catch()
    {
        global $wp_query;

        if (array_key_exists('vehicle_slug', $wp_query->query_vars)) {
            include(get_template_part_acf('templates/template', 'inventory'));
            exit;
        }
    }

    /**
     * @return array
     */
    public function test_variables()
    {

        global $wp_query;

        return [
            $wp_query->query_vars['vehicle_slug'],
            $wp_query->query_vars['vehicle_id'],
            $wp_query->query_vars['stock_type']
        ];
    }
}

new HandleRewrites;
