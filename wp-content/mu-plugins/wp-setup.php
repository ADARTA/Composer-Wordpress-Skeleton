<?php
if (!is_blog_installed()) { return; }

$my_server_port = ((!empty ($_SERVER ['SERVER_PORT']) AND $_SERVER ['SERVER_PORT'] <> '80') ? (":" . $_SERVER ['SERVER_PORT']) : '');
$my_server_name = (!empty ($my_server_port) ?($_SERVER['SERVER_NAME'] . $my_server_port) : $_SERVER['SERVER_NAME'] );

if ('http://' . $my_server_name . '/wp' == get_option('home') || (empty (get_option('upload_url_path')))) {
  update_option('siteurl', 'http://' . $my_server_name . '/wp');
  update_option('home', 'http://' . $my_server_name);
  update_option('upload_path', $_SERVER['DOCUMENT_ROOT'] . '\media');
  update_option('upload_url_path', 'http://' . $my_server_name . '/media');
  update_option('permalink_structure', '/%postname%/');
}
 
if (defined('FRONT_PAGE') && defined('POSTS_PAGE') && !get_option('page_on_front')) {
  $front = get_page_by_title(FRONT_PAGE);
  $posts = get_page_by_title(POSTS_PAGE);
 
  if ($front && $posts) {
    update_option('show_on_front', 'page');
    update_option('page_on_front', $front->ID);
    update_option('page_for_posts', $posts->ID);
  }
}
?>