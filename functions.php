<?php

// head
// ----------------------------------------

// wp_head
remove_action('wp_head', 'wp_generator');

// support title tag
add_theme_support( 'title-tag' );


// header
// ----------------------------------------

// Custom Menu
register_nav_menus( array(
	'main-nav' => 'Main Menu',
) );


// get_the_archive_title 使用時に表示される「カテゴリー：」を削除
// ----------------------------------------
add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}
	return $title;
});


// カスタムフィールド：ページのサブタイトル（英語表記）
// ----------------------------------------

add_action('admin_menu', 'add_page_subtitle');
add_action('save_post', 'save_page_subtitle');

function add_page_subtitle() {
	add_meta_box('page_subtitle', 'サブタイトル（英語表記）', 'insert_page_subtitle', 'page', 'normal', 'high');
}

function insert_page_subtitle() {
	global $post;
	wp_nonce_field(wp_create_nonce(__FILE__), 'my_nonce');
	echo '<input type="text" name="page_subtitle" value="'.esc_html(get_post_meta($post->ID, 'page_subtitle', true)).'" style="display: block; width: 100%;" />';
}

function save_page_subtitle($post_id) {
	global $post;
	$my_nonce = isset($_POST['my_nonce']) ? $_POST['my_nonce'] : null;
	if( !wp_verify_nonce($my_nonce, wp_create_nonce(__FILE__)) ) {
		return $post_id;
	}
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) { return $post_id; }
	if( !current_user_can('edit_post', $post->ID) ) { return $post_id; }
	if( $_POST['post_type'] == 'page' ) {
		update_post_meta($post->ID, 'page_subtitle', $_POST['page_subtitle']);
	}
}

?>
