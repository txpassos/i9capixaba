<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails2' );
set_post_thumbnail_size( 188, 115, true );
add_image_size( "slider-noticias", 580, 400, true );
add_image_size( "slider-post", 960, 540, true );
add_image_size( "destaque1", 400, 300, true );
add_image_size( "destaque2", 300, 300, true );
add_image_size( "agenda-cultural", 275, 320, true );  


//Limitando a 80 caracteres #Destaque1
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 80);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}

function title_excerpt($maxchars) {
    $title = get_the_title($post->ID);
    $title = substr($title,0,$maxchars);
    echo $title;
}

    <?php
    	add_action('init', 'type_post_eventos');
     
    	function type_post_eventos() { 
    		$labels = array(
    			'name' => _x('Eventos', 'post type general name'),
    			'singular_name' => _x('Evento', 'post type singular name'),
    			'add_new' => _x('Adicionar evento', 'Novo evento'),
    			'add_new_item' => __('Novo Evento'),
    			'edit_item' => __('Editar Evento'),
    			'new_item' => __('Novo Evento'),
    			'view_item' => __('Ver Evento'),
    			'search_items' => __('Procurar Eventos'),
    			'not_found' =>  __('Nenhum registro encontrado'),
    			'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
    			'parent_item_colon' => '',
    			'menu_name' => 'Agenda Cultural'
    		);
     
    		$args = array(
    			'labels' => $labels,
    			'public' => true,
    			'public_queryable' => true,
    			'show_ui' => true,			
    			'query_var' => true,
    			'rewrite' => true,
    			'capability_type' => 'post',
    			'has_archive' => true,
    			'hierarchical' => false,
    			'menu_position' => null,
    'register_meta_box_cb' => 'noticias_meta_box',		
    			'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
              );
     
    register_post_type( 'eventos' , $args );
    flush_rewrite_rules();
    }
    ?>