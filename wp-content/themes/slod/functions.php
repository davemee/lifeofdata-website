<?php

/*
 *function add_custom_query_var( $vars ){
 *$vars[] = "role";
 *return $vars;
 *}
 *add_filter( 'query_vars', 'add_custom_query_var' );
 *
 *$my_c = get_query_var( 'role' );
 *
 *print "<h1>role=".$my_c."</h1>";
 */
?><?php
	remove_filter('template_redirect','redirect_canonical');
?><?php


    // menu logic

    function register_my_menus() {
        register_nav_menus(
            array(
                'map-menu' => __( 'Map Menu' ),
                'primary-menu' => __( 'Primary Menu' ),
                'secondary-menu' => __( 'Secondary Menu' ),
                'footer-menu' => __( 'Footer Menu' )
            )
        );
    }
//    add_action( 'init', 'register_my_menus' );

    class ik_walker extends Walker_Nav_Menu{		
        //start of the sub menu wrap
        function start_lvl(&$output, $depth) {
            $output .= '<div class="drop">
                            <div class="holder">
                                <div class="container">
                                    <ul class="list">';
        }

        //end of the sub menu wrap
        function end_lvl(&$output, $depth) {
            $output .= '
                        </ul>
                    </div>
                </div>
                <div class="bottom"></div>
            </div>';
        }

        //add the description to the menu item output
        function start_el(&$output, $item, $depth, $args) {
            global $wp_query;
            $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

            $class_names = $value = '';

            $classes = empty( $item->classes ) ? array() : (array) $item->classes;

            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
            $class_names = ' class="' . esc_attr( $class_names ) . '"';

            $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )	    ? ' target="' . esc_attr( $item->target	) .'"' : '';
            $attributes .= ! empty( $item->xfn )	    ? ' rel="'	  . esc_attr( $item->xfn	) .'"' : '';
            $attributes .= ! empty( $item->url )	    ? ' href="'	  . esc_attr( $item->url	) .'"' : '';
            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            if(strlen($item->description)>2){ $item_output .= '<br /><span class="sub">' . $item->description . '</span>'; }
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            
        }
    }

/*    wp_nav_menu( array(
        'container' => false, 
        'menu_id' => 'nav', 
        'depth' => 0,
        'theme_location' => 'map-menu', 
        //this is the important part, we tell it to use the nav walker we just wrote
        'walker' => new ik_walker())
    );
*/

/*

* find all matching posts
    * dump them 
        * location
        * roles & links
* find all matching edges
    * dump them 
    * post from, to 

    */


?><?php 

function map_link_category_connection() {

    p2p_register_connection_type( array(
        'name' => 'outbound_node_to_node',
        'from' => 'node',
        'to'   => 'node',
        'reciprocal' => true,
        'duplicate_connections' => true,
        'can_create_post' => false,
        'fields' => array(
            'track' => array(
                'title' => 'Track',
                'type' => 'select',
                'values' => array( 'None', 'Citizen Science', 'Data Production', 'Climate Science', 'Weather Derivatives' )
            )
        ) 
    ) );
}

add_action ('p2p_init', 'map_link_category_connection');
?>