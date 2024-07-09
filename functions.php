<?php

add_theme_support('post-thumbnails');

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});

function correct_title($title)
{
    if (is_search()) {
        $title['title'] = '検索結果：' . get_search_query();
    } elseif (is_404()) {
        $title['title'] = 'お探しのページは見つかりません';
    }
    return $title;
}
add_filter('document_title_parts', 'correct_title');


/*カスタム投稿設定　ビジョン================================================ */
// function cpt_register_vision()
// {
//     register_post_type(
//         'member',
//         array(
//             'labels' => array(
//                 'name' => __('ビジョンマップ'),
//                 'singular_name' => __('ビジョンマップ')
//             ),
//             'public' => true,
//             'has_archive' => false,
//             'menu_position' => 5,
//             'supports' => array('title', 'editor', 'author', 'excerpt', 'custom-fields'),
//         )
//     );
// }
// add_action('init', 'cpt_register_vision');


/*カスタム投稿設定　社員紹介================================================ */
// function cpt_register_member()
// {
//     register_post_type(
//         'member',
//         array(
//             'labels' => array(
//                 'name' => __('社員紹介'),
//                 'singular_name' => __('社員紹介')
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'menu_position' => 5,
//             'supports' => array('title', 'editor', 'author', 'excerpt', 'custom-fields'),
//         )
//     );
// }
// add_action('init', 'cpt_register_member');


/*カスタム投稿設定　お客様の声================================================ */
function cpt_register_voice()
{
    register_post_type(
        'voice',
        array(
            'labels' => array(
                'name' => __('転職者様の声'),
                'singular_name' => __('転職者様の声')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
        )
    );
}
add_action('init', 'cpt_register_voice');

/*カスタム投稿設定　お客様の声================================================ */
function cpt_register_voice2()
{
    register_post_type(
        'voice2',
        array(
            'labels' => array(
                'name' => __('コーチング会社様の声'),
                'singular_name' => __('コーチング会社様の声')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
        )
    );
}
add_action('init', 'cpt_register_voice2');


/*【archive設定】================================================ */

// function post_has_archive($args, $post_type)
// {
//     if ("post" == $post_type) {
//         $args["rewrite"] = true;
//         $args["has_archive"] = "blog";
//         $args["label"] = "ブログ";
//     }
//     return $args;
// }
// add_filter("register_post_type_args", "post_has_archive", 10, 2);


/*【front-page blog表示件数変更】================================================ */

function blog_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    if ($query->is_front_page()) {
        $query->set("posts_per_page", "3");
    }
}
add_action("pre_get_posts", "blog_posts_per_page");


/*【表示件数変更】================================================ */
function column_posts($query)
{
    /*管理画面、メインクエリへの干渉======== */
    if (is_admin() || !$query->is_main_query())
        return;
    /*実績一覧ページでの表示件数======== */
    if ($query->is_post_type_archive("works")) {
        $query->set("posts_per_page", "6");
        return;
    }
    /*ブログ一覧ページでの最新投稿表示件数======== */
    if ($query->is_archive()) {
        $query->set("posts_per_page", "9");
        return;
    }
}
add_action("pre_get_posts", "column_posts");


/*ぱんくずリスト============================ */
function output_breadcrumb()
{
    $home = '<li><a href="' . get_bloginfo('url') . '">トップ</a></li>&nbsp; >&nbsp; ';
    echo '<ul class="breadcrumb">';

    // トップページの場合
    if (is_front_page()) {

        // カテゴリーページの場合
    } else if (is_category()) {
        $cat = get_queried_object();
        $cat_id = $cat->parent;
        $cat_list = array();
        while ($cat_id != 0) {
            $cat = get_category($cat_id);
            $cat_link = get_category_link($cat_id);
            array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li>&nbsp; >&nbsp; ');
            $cat_id = $cat->parent;
        }
        echo $home;
        foreach ($cat_list as $value) {
            echo $value;
        }
        the_archive_title('<li>', '</li>');

        // アーカイブページの場合
    } else if (is_archive()) {
        echo $home;
        the_archive_title('<li>', '</li>');

        // 投稿ページの場合
    } else if (is_single()) {
        $cat = get_the_category();
        if (isset($cat[0]->cat_ID)) $cat_id = $cat[0]->cat_ID;
        $cat_list = array();
        while ($cat_id != 0) {
            $cat = get_category($cat_id);
            $cat_link = get_category_link($cat_id);
            array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li>&nbsp; >&nbsp; ');
            $cat_id = $cat->parent;
        }
        echo $home;
        foreach ($cat_list as $value) {
            echo $value;
        }
        the_title('<li>', '</li>');

        // 固定ページの場合
    } else if (is_page()) {
        echo $home;
        the_title('<li>', '</li>');

        // 検索結果の場合
    } else if (is_search()) {
        echo $home;
        echo '<li>「' . get_search_query() . '」の検索結果</li>';

        // 404ページの場合
    } else if (is_404()) {
        echo $home;
        echo '<li>ページが見つかりません</li>';
    }
    echo '</ul>';
}

// pegeNation
function custom_pagination_html($template)
{
    $template = '
    <nav class="pagination wrap" role="navigation">
        %3$s
    </nav>';
    return $template;
}
add_filter('navigation_markup_template', 'custom_pagination_html');

add_action( 'get_header', 'specific_url_redirect' );
function specific_url_redirect(){
	$url = $_SERVER['REQUEST_URI']; //現在のページのURLを取得
	//URLに「redirect-page」という文字列が含まれていたらリダイレクト
	if(strstr($url,'entry')){
		wp_redirect( 'https://shine-parsnip-fd7.notion.site/RECRUIT-53a5c827a92a4e17922557073cb09afb', 302 );
		exit;
	}
}