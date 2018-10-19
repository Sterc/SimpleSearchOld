<?php
/**
 * English Default Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language en
 */
$_lang['simplesearch.no_results'] = 'There were no search results for the search "[[+query]]". Please try using more general terms to get more results.';
$_lang['simplesearch.search'] = 'Search';
$_lang['simplesearch.results_found'] = '[[+count]] Results found for "[[+text]]"';
$_lang['simplesearch.result_pages'] = 'Result pages:';
$_lang['simplesearch.index_finished'] = 'Finished indexing [[+total]] Resources.';

/* Settings */
$_lang['setting_simplesearch.driver_class'] = 'Search Driver Class';
$_lang['setting_simplesearch.driver_class_desc'] = 'Change this to use a different search driver. SimpleSearch provides you with SimpleSearchDriverBasic and SimpleSearchDriverSolr (assuming you have a working Solr server).';
$_lang['setting_simplesearch.driver_class_path'] = 'Search Driver Class Path';
$_lang['setting_simplesearch.driver_class_path_desc'] = 'Optional. Set this to point to the absolute path where the search driver_class can be found. Leave blank to use the default driver directory.';
$_lang['setting_simplesearch.driver_db_specific'] = 'Search Driver Database Specificity';
$_lang['setting_simplesearch.driver_db_specific_desc'] = 'Set this to Yes if the search driver you are using uses derivative classes for different SQL drivers. (SQL searches will be Yes, Solr and other index-based searches will be No.)';
$_lang['setting_simplesearch.autosuggest_tv'] = 'Autosuggest Template Variable';
$_lang['setting_simplesearch.autosuggest_tv_desc'] = 'Provide the TV ID or name to use for generating a list of autosuggest search terms.';
