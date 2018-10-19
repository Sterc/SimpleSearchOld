<?php
/**
 * Czech Default Topic for SimpleSearch
 * translated by Jiri Pavlicek jiri@pavlicek.cz
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language cz
 */
$_lang['simplesearch.no_results'] = 'Pro hledaný text "[[+query]]" nebyl nalezen žádný výsledek. Použijte, prosím, obecnější text pro hledání.';
$_lang['simplesearch.search'] = 'Hledat';
$_lang['simplesearch.results_found'] = '[[+count]] výskytů nalezeno pro "[[+text]]"';
$_lang['simplesearch.result_pages'] = 'Stránky výsledků hledání: ';
$_lang['simplesearch.index_finished'] = 'Dokončeno indexování [[+total]] dokumentů.';

/* Settings */
$_lang['setting_simplesearch.driver_class'] = 'Search Driver Class';
$_lang['setting_simplesearch.driver_class_desc'] = 'Change this to use a different search driver. SimpleSearch provides you with SimpleSearchDriverBasic and SimpleSearchDriverSolr (assuming you have a working Solr server).';
$_lang['setting_simplesearch.driver_class_path'] = 'Search Driver Class Path';
$_lang['setting_simplesearch.driver_class_path_desc'] = 'Optional. Set this to point to the absolute path where the search driver_class can be found. Leave blank to use the default driver directory.';
$_lang['setting_simplesearch.driver_db_specific'] = 'Search Driver Database Specificity';
$_lang['setting_simplesearch.driver_db_specific_desc'] = 'Set this to Yes if the search driver you are using uses derivative classes for different SQL drivers. (SQL searches will be Yes, Solr and other index-based searches will be No.)';
