<?php

// アイキャッチ設定
add_theme_support('post-thumbnails');

// html5許可
add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);

// RSS用リンク出力
add_theme_support('automatic-feed-links');

// oembed消去
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

// wp-json消去
remove_action('template_redirect', 'rest_output_link_header', 11);

// 絵文字消去
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// 外部投稿ツール消去
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// meta generator消去
remove_action('wp_head', 'wp_generator');

// 短縮URL消去
remove_action('wp_head', 'wp_shortlink_wp_head');

// 次の記事消去
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

// adminbarカスタマイズ
function remove_adminbar_item($wp_admin_bar)
{
    if (!is_admin()) {
        $wp_admin_bar->remove_node('wp-logo');
        $wp_admin_bar->remove_node('new-content');
        $wp_admin_bar->remove_node('comments');
        $wp_admin_bar->remove_node('appearance');
        $wp_admin_bar->remove_node('updates');
        $wp_admin_bar->remove_node('search');
        $wp_admin_bar->remove_node('customize');
    }
}
add_action('admin_bar_menu', 'remove_adminbar_item', 999);

// タイトルタグ追加
add_theme_support('title-tag');

// タイトルタグセパレーター変更
function title_separator($sep)
{
    $sep = '｜';
    return $sep;
}
add_filter('document_title_separator', 'title_separator');

// 標準のjquery消去
function my_delete_local_jquery()
{
    if (!is_admin() && !is_front_page() && !is_page(['group-form'])) {
        wp_deregister_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'my_delete_local_jquery');

// ウィジェット登録
function arphabet_widgets_init()
{
    register_sidebar([
        'name' => 'サイドウイジェット',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="sidebar-ttl">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'arphabet_widgets_init');

// メニュー登録
function register_my_menu()
{
    register_nav_menu('header-menu', __('ヘッダーメニュー'));
}
add_action('init', 'register_my_menu');

// エディタースタイル
function gutenberg_support_setup()
{
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'gutenberg_support_setup');

// CSSの管理
function twpp_enqueue_styles()
{
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri().'/dist/css/style.css',
        [],
        '1.0.1',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

// JSの管理
function add_my_scripts()
{
    wp_enqueue_script(
        'base-script',
        get_template_directory_uri().'/dist/js/bundle.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'add_my_scripts');


// MTS Simple Bookingカスタマイズ
function form_count_label($str)
{
    if ($str == '大人') {
        return '女性';
    } elseif ($str == '小人') {
        return '男性';
    } elseif ($str == '幼児') {
        return '子ども';
    }
    return '';
}
add_filter('booking_form_count_label', 'form_count_label');

function form_option_title($title)
{
    return '【プラン・オプション】';
}
add_filter('booking_form_option_title', 'form_option_title');

function form_tel($tel)
{
    return '携帯電話番号';
}
add_filter('booking_form_tel', 'form_tel');

function form_option_message($message)
{
    return '';
}
add_filter('booking_form_option_message', 'form_option_message');
