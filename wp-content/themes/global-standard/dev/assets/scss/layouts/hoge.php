/* ----------------------------
* カスタム投稿タイプ【コース】にカスタムタクソノミー【学年】を追加する
* ---------------------------- */

function tax_register_school_year()
{
$args = [
'label' => '学年', // タクソノミーの名前
'labels' => [
'singular_name' => '学年', // タクソノミーの複数形の名前 日本語圏の場合は同じでOKだよ
'edit_item' => '学年を編集', //タクソノミーのデフォルトの編集の文言を変更できる
'add_new_item' => '新規学年を追加' //タクソノミーのデフォルトの追加の文言を変更できる
],
'hierarchical' => true, //階層化するかどうか（カテゴリー的に使うならtrue、タグ的に使うならfalse）
'query_var' => true, //クエリパラメーターを使えるようにする
'show_in_rest' => true //REST APIにカスタムタクソノミーを含めるかどうか、グーテンベルクのブロックエディターで分類を使用するにはtrue
];

// register_taxonomyはカスタムタクソノミーを作成するよ。【第1引数】はスラッグ名で、【第2引数】はどの投稿タイプにタクソノミーを追加するか。【第3引数】はオプションを指定できるよ。
register_taxonomy('school-year', 'course', $args);
}
// addアクションで、initというタイミングにフックしてtax_register_school_yearという関数を実行するよ。
add_action('init', 'tax_register_school_year');


/* ----------------------------
* カスタム投稿タイプ【コース】にカスタムタクソノミー【期間】を追加する
* ---------------------------- */
function tax_register_period()
{
$args = [
'label' => '期間',
'labels' => [
'singular_name' => '期間',
'edit_item' => '期間を編集',
'add_new_item' => '新規期間を追加'
],
'hierarchical' => true,
'query_var' => true,
'show_in_rest' => true
];
register_taxonomy('period', 'course', $args);
}
add_action('init', 'tax_register_period');