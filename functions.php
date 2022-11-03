<?php 
 add_theme_support( 'menus' );
 add_theme_support("post-thumbnails");
 add_theme_support( 'custom-header' );
 
//ヘッダーテキストの色を変更可能にする
// function wphead_cb() {
//   echo '<style type="text/css">';
//   echo '.topimg-pc h1, .topimg-pc h6 { color: #'.get_header_textcolor().' }';
//   echo '</style>';
// }
// // カスタムヘッダー
// $custom_header = array(
//   'random-default' => false,
//   'width' => 1000,
//   'height' => 300,
//   'flex-height' => true,
//   'flex-width' => true,
//   'default-text-color' => '',
//   'header-text' => true,
//   'uploads' => true,
//   // ヘッダーテキストのデフォルトの色
//     'default-text-color' => '000',
//     'wp-head-callback' => 'wphead_cb',
//                            // デフォルト画像へのパス
//   'default-image' => get_bloginfo('template_url').'/folder/visual_1_pc.png',
//   'admin-head-callback'    => '',      // 管理画面で、[外観 - カスタマイズ]をプレビューするためのコールバック
//       'admin-preview-callback' => '',
//   );
//   add_theme_support( 'custom-header', $custom_header );
// PHP最後のカッコ
?>

    