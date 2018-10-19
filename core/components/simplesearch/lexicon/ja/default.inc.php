<?php
/**
 * Japanese Default Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language ja
 */
$_lang['simplesearch.no_results'] = '"[[+query]]"の検索結果は見つかりませんでした。 検索ワードを変更してもう一度お試しください。';
$_lang['simplesearch.search'] = '検索';
$_lang['simplesearch.results_found'] = '[[+count]] 件の検索結果 : "[[+text]]"';
$_lang['simplesearch.result_pages'] = '検索結果:';
$_lang['simplesearch.index_finished'] = '[[+total]] 件のリソースをインデックスに登録しました。';

/* Settings */
$_lang['setting_simplesearch.driver_class'] = '検索ドライバークラス';
$_lang['setting_simplesearch.driver_class_desc'] = '異なる検索ドライバーを設定します。SimpleSearchは標準の設定であるSimpleSearchDriverBasic以外にSimpleSearchDriverSolrを提供します。(Solrを使用するときは別途Solrサーバーを準備する必要があります)';
$_lang['setting_simplesearch.driver_class_path'] = '検索ドライバークラスの場所';
$_lang['setting_simplesearch.driver_class_path_desc'] = 'オプション 必要に応じて検索ドライバークラスが定義されているファイルへの絶対パスを設定します。空欄の場合、デフォルトのドライバーディレクトリから検索します。';
$_lang['setting_simplesearch.driver_db_specific'] = '特定の検索ドライバーデータベース';
$_lang['setting_simplesearch.driver_db_specific_desc'] = '異なるSQLドライバーの派生クラスを検索ドライバーとして使う場合、"はい"を選択してください。このプロパティは通常、SQL検索ならはい、Solrなどインデックス方式の検索ならいいえになります。';
