<?php
/*
Plugin Name: Luminosos Campinas - Clientes
Description: Inserir clientes no site.
Version: 1.0
Author: wetuf
Author URI: http://www.wetuf.com.br/
License: GPLv2
*/


// Register Custom Post Type
function cliente_review() {

	$labels = array(
		'name'                => _x( 'Clientes', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Cliente', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Clientes', 'text_domain' ),
		'name_admin_bar'      => __( 'Clientes', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'Todos', 'text_domain' ),
		'add_new_item'        => __( 'Novo cliente', 'text_domain' ),
		'add_new'             => __( 'Adicionar novo', 'text_domain' ),
		'new_item'            => __( 'Novo cliente', 'text_domain' ),
		'edit_item'           => __( 'Editar cliente', 'text_domain' ),
		'update_item'         => __( 'Atualizar cliente', 'text_domain' ),
		'view_item'           => __( 'Visualizar cliente', 'text_domain' ),
		'search_items'        => __( 'Procurar cliente', 'text_domain' ),
		'not_found'           => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Clientes', 'text_domain' ),
		'description'         => __( 'Clientes no site', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'          => array( 'category', 'tags' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'Clientes', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cliente_review', 0 );

?>