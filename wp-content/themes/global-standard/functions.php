<?php

/* ----------------------------
 * テーマに関する設定
 * ---------------------------- */
function add_setup()
{
  add_theme_support("automatic-feed-links"); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support("title-tag"); // headのタイトルタグ自動生成
  add_theme_support(
    // WordPressコアから出力されるHTMLタグをHTML5のフォーマットにする
    "html5",
    array(
      "search-form",
      "comment-form",
      "comment-list",
      "gallery",
      "caption",
    )
  );
}
add_action("after_setup_theme", "add_setup");

/* ----------------------------
* faviconの設定
* ---------------------------- */
add_filter("get_site_icon_url", "my_site_icon_url");

function my_site_icon_url($url)
{
  return get_theme_file_uri("assets/images/favicon.png");
}

/* ----------------------------
* サムネイルに関する設定
* ---------------------------- */
function add_setup_thumbnails()
{
  add_theme_support("post-thumbnails"); // アイキャッチ画像を有効化
  add_image_size("case-logo", 960, 9999, true); // 独自画像サイズの追加
}
add_action("after_setup_theme", "add_setup_thumbnails");

/* ----------------------------
 * scriptファイルやstylesheetの読み込み
 * ---------------------------- */
function add_scripts()
{
  // google font
  wp_enqueue_style("fira-sans", "https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,500;1,700&display=swap");
  wp_enqueue_style("noto-sans-jp", "https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap");

  // style & script
  wp_enqueue_style("swiper-style", get_theme_file_uri("/assets/css/libs/swiper.min.css"), [], filemtime(get_theme_file_path("/assets/css/libs/swiper.min.css")));
  wp_enqueue_style("main-style", get_theme_file_uri("/assets/css/style.css"), ["swiper-style"], filemtime(get_theme_file_path("/assets/css/style.css")));
  wp_enqueue_script("swiper-script", get_theme_file_uri("/assets/js/libs/swiper-bundle.min.js"), ["jquery"], filemtime(get_theme_file_path("/assets/js/libs/swiper-bundle.min.js")));
  wp_enqueue_script("main-script", get_theme_file_uri("/assets/js/main.js"), ["jquery", "swiper-script"], filemtime(get_theme_file_path("/assets/js/main.js")));
}
add_action("wp_enqueue_scripts", "add_scripts");


/* ----------------------------
 * デフォルトの投稿というラベルを変更
 * ---------------------------- */
function change_post_menu_label()
{
  global $menu;
  global $submenu;
  $name = "お知らせ";
  $menu[5][0] = $name;
  $submenu["edit.php"][5][0] = $name . "一覧";
  // $submenu["edit.php"][10][0] = "新しい" . $name;
}
function change_post_object_label()
{
  global $wp_post_types;
  $name = "お知らせ";
  $labels = &$wp_post_types["post"]->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x("新規追加", $name);
  $labels->add_new_item = $name . "を新規追加";
  $labels->edit_item = $name . "の編集";
  $labels->new_item = "新規" . $name;
  $labels->view_item = $name . "を表示";
  $labels->search_items = $name . "を検索";
  $labels->not_found = $name . "が見つかりませんでした";
  $labels->not_found_in_trash = "ゴミ箱に" . $name . "は見つかりませんでした";
}
add_action("init", "change_post_object_label");
add_action("admin_menu", "change_post_menu_label");

/* ----------------------------
 * カスタム投稿タイプを作成する【導入事例】
 * ---------------------------- */
function cpt_register_course()
{
  $name = "導入事例";
  $name_cat = "事例";
  $args = [
    "label" => $name, // 管理画面のメニューの名前
    "labels" => [
      "singular_name" => $name, // 単数形の名前 日本語圏の場合は両方同じ
      "all_items" => $name_cat . "一覧",
      "add_new" => _x("新規追加", $name_cat), //投稿画面の新規投稿を追加の文言を変更できる
      "add_new_item" => $name_cat . "を新規追加",
      "edit_item" => $name_cat . "を編集", //投稿画面の投稿を編集の文言を変更できる
      "new_item" => "新規" . $name_cat,
      "view_item" => $name_cat . "を表示",
      "search_items" =>  $name_cat . "を検索",
      "not_found" => $name_cat . "が見つかりませんでした",
      "not_found_in_trash" => "ゴミ箱に" . $name_cat . "は見つかりませんでした",
    ],
    "public" => true, //カスタム投稿タイプを一般に公開するかどうか
    "show_in_rest" => true, //REST APIにカスタム投稿タイプを含めるかどうか → カスタム投稿タイプでブロックエディタを使うならtrue
    "has_archive" => false, //アーカイブページを持つかどうか
    "delete_with_user" => false, //ユーザーを削除した後、コンテンツも削除するかどうか
    "exclude_from_search" => false, //検索から除外するかどうか
    "hierarchical" => false, //階層化するかどうか 階層化すると固定ページのようになる
    "query_var" => true, //クエリパラメーターを使えるようにする → プレビュー画面を使うためにはtrue
    "menu_position" => 5, //管理画面に表示するメニューの位置
    "supports" => [
      "title", "editor", "thumbnail", "custom-fields"
    ], //カスタム投稿タイプがサポートする機能
  ];

  register_post_type("case", $args);
}
add_action("init", "cpt_register_course");

/* ----------------------------
 * カスタム投稿タイプ【導入事例】にカスタムタクソノミー【カテゴリー】を追加する
 * ---------------------------- */
function tax_register_school_year()
{
  $name = "カテゴリー";
  $args = [
    "label" => $name, // タクソノミーの名前
    "labels" => [
      "singular_name" => $name, // タクソノミーの複数形の名前 日本語圏の場合は同じでOKだよ
      "edit_item" => $name . "を編集", //タクソノミーのデフォルトの編集の文言を変更できる
      "add_new_item" => $name . "を追加" //タクソノミーのデフォルトの追加の文言を変更できる
    ],
    "hierarchical" => true, //階層化するかどうか（カテゴリー的に使うならtrue、タグ的に使うならfalse）
    "query_var" => true, //クエリパラメーターを使えるようにする
    "show_in_rest" => true //REST APIにカスタムタクソノミーを含めるかどうか、グーテンベルクのブロックエディターで分類を使用するにはtrue
  ];

  // register_taxonomyはカスタムタクソノミーを作成するよ。【第1引数】はスラッグ名で、【第2引数】はどの投稿タイプにタクソノミーを追加するか。【第3引数】はオプションを指定できるよ。
  register_taxonomy("case_category", "case", $args);
}
// addアクションで、initというタイミングにフックしてtax_register_school_yearという関数を実行するよ。
add_action("init", "tax_register_school_year");


/* ----------------------------
* ContactForm7で送信ボタンをクリックしたら別ベージに遷移する
* ---------------------------- */
function add_origin_thanks_page()
{
  $download = home_url("/download/download-thanks/");
  $contact = home_url("/contact/contact-thanks/");
  //  const thanksPage = {formのID: "{ページスラッグ}",};
  echo <<< EOC
      <script>
        const thanksPage = {
          239: "{$download}",
          238: "{$contact}",
        };
      document.addEventListener( "wpcf7mailsent", function( event ) {
        location = thanksPage[event.detail.contactFormId];
      }, false );
      </script>
      EOC;
}
add_action("wp_footer", "add_origin_thanks_page");

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter("wpcf7_autop_or_not", "wpcf7_autop_return_false");
function wpcf7_autop_return_false()
{
  return false;
}


/* ----------------------------
* プラグイン【All-in-One WP Migration】- 除外するするファイルを設定
* ---------------------------- */
function migration_exclude_filters($exclude_filters)
{
  $theme_name = esc_html(get_template());
  $exclude_filters = array(
    "{$theme_name}/dev",
  );
  return $exclude_filters;
}
add_filter("ai1wm_exclude_themes_from_export", "migration_exclude_filters");

/* ----------------------------
* プラグイン【BackWPup】- 管理画面の除外するファイルを追加
* ---------------------------- */
function backwpup_exclude_filters($fileExtensions)
{
  $theme_name = esc_html(get_template()); //現在適用されているテーマの名前を取得
  return $fileExtensions . ",/wp-content/db.php,/wp-content/themes/{$theme_name}/dev,/wp-content/db.php,/wp-content/.vscode";
}
add_filter("backwpup_file_exclude", "backwpup_exclude_filters");

/* ----------------------------
* WordPressの自動補完のリダイレクトを無効化する
* ---------------------------- */
add_filter("redirect_canonical", "disable_redirect_canonical");
function disable_redirect_canonical($redirect_url)
{
  if (is_404()) {
    return false;
  }
  return $redirect_url;
}
