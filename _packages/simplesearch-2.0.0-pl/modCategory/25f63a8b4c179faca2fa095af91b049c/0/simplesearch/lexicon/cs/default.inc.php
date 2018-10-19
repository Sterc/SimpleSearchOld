<?php
/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Sterc <modx@sterc.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
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
