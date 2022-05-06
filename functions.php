<?php
function sketchify_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'sketchify_theme_support');

function sketchify_menus(){
    $locations = array(
        'primary' => "Header Menu",
        'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'sketchify_menus');

function sketchify_register_styles() {
    wp_enqueue_style('sketchify-styles', get_template_directory_uri(). "/style.css", array(), '1.0', 'all');
    if ( is_page() ) {
        wp_enqueue_style( 'sketchify-about-page-styles', get_stylesheet_directory_uri() . '/assets/css/about.css' );
    }
}

add_action('wp_enqueue_scripts', 'sketchify_register_styles');

function sketchify_register_scripts() {
    wp_enqueue_script('sketchify-script-vendors', get_template_directory_uri().
        "/assets/js/vendors.min.js", array(), '1.0', 'all');
    wp_enqueue_script('sketchify-scripts', get_template_directory_uri().
        "/assets/js/app.min.js", array('sketchify-script-vendors'), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'sketchify_register_scripts');
function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'templates/partners.php' ) ) {
        wp_enqueue_style( 'sketchify-partners-styles', get_stylesheet_directory_uri() . '/assets/css/partners.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );

## Добавляем блоки в основную колонку на страницах постов и пост. страниц
add_action('add_meta_boxes', 'myplugin_add_custom_box');
function myplugin_add_custom_box(){
	$screens = array( 'post', 'page' );
	add_meta_box( 'myplugin_sectionid', 'Название мета блока', 'myplugin_meta_box_callback', $screens );
}

// HTML код блока
function myplugin_meta_box_callback( $post, $meta ){
	$screens = $meta['args'];

	// Используем nonce для верификации
	wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

	// значение поля
	$value = get_post_meta( $post->ID, 'my_meta_key', 1 );

	// Поля формы для введения данных
	echo '<label for="myplugin_new_field">' . __("Description for this field", 'myplugin_textdomain' ) . '</label> ';
	echo '<input type="text" id="myplugin_new_field" name="myplugin_new_field" value="'. $value .'" size="25" />';
}

## Сохраняем данные, когда пост сохраняется
add_action( 'save_post', 'myplugin_save_postdata' );
function myplugin_save_postdata( $post_id ) {
	// Убедимся что поле установлено.
	if ( ! isset( $_POST['myplugin_new_field'] ) )
		return;

	// проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
	if ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) ) )
		return;

	// если это автосохранение ничего не делаем
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
		return;

	// проверяем права юзера
	if( ! current_user_can( 'edit_post', $post_id ) )
		return;

	// Все ОК. Теперь, нужно найти и сохранить данные
	// Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['myplugin_new_field'] );

	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'my_meta_key', $my_data );
}

?>