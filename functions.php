<?php

add_theme_support( 'post-thumbnails' );

add_action( 'init', 'theme_menus' );
function theme_menus() {
register_nav_menus(
array(
'menu-1' => __( 'ana-menu' ),
'menu-2' => __( 'Head menu' )
)
);
}
?>

<?php 

function get_excerpt($count)

{$permalink = get_permalink($post->ID); $excerpt = get_the_content();

$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $count);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
return $excerpt;
}
?>

<?php
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );

}
?>

<?php

add_filter( 'avatar_defaults', 'wpmavi_yeni_gravatar' );
function wpmavi_yeni_gravatar ($avatar_defaults) {
$myavatar = '';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}

?>

<?php

/* WordPress Kullanıcı Profiline Ekstra Bölüm Ekleme */

add_filter('user_contactmethods', 'my_user_contactmethods');
 
function my_user_contactmethods($user_contactmethods){
  $user_contactmethods['facebook'] = 'Facebook Kullanıcı Linki';
  $user_contactmethods['twitter'] = 'Twitter Kullanıcı Linki';
  $user_contactmethods['instagram'] = 'Instagram Kullanıcı Linki';
  $user_contactmethods['misyon'] = 'Sitedeki misyonu';
 
  return $user_contactmethods;
}

/* WordPress Kullanıcı Profiline Ekstra Bölüm Ekleme */

?>
<?php
function custom_loginlogo() {

echo '<style type="text/css">
body{background:black;}
h1 a {background-image: url('.get_bloginfo('template_directory').'/img/seksenikiekran.png) !important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');
?>
<?php
function add_favicon() {
  echo '<link rel="shortcut icon" type="image/png" 
href="'.get_template_directory_uri().'/img/seksen_iki_icon.png" />';
}
 
add_action('wp_head', 'add_favicon');
?>