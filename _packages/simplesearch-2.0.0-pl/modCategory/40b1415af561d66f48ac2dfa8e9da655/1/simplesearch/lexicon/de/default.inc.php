<?php
/**
 * German Default Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language de
 */
$_lang['simplesearch.no_results'] = 'Es konnten keine Ergebnisse für den Suchbegriff "[[+query]]" gefunden werden. Bitte versuchen Sie es mit allgemeineren Suchbegriffen, um mehr Ergebnisse zu erhalten.';
$_lang['simplesearch.search'] = 'Suchen';
$_lang['simplesearch.results_found'] = '[[+count]] Ergebnis(se) für "[[+text]]" gefunden';
$_lang['simplesearch.result_pages'] = 'Ergebnisseiten:';
$_lang['simplesearch.index_finished'] = 'Indizierung von [[+total]] Ressourcen beendet.';

/* Settings */
$_lang['setting_simplesearch.driver_class'] = 'Suchtreiber-Klasse';
$_lang['setting_simplesearch.driver_class_desc'] = 'Ändern Sie diese Einstellung, um einen anderen Suchtreiber zu verwenden. SimpleSearch stellt Ihnen die Treiber SimpleSearchDriverBasic und SimpleSearchDriverSolr (vorausgesetzt, Sie verfügen über einen funktionierenden Solr-Server) zur Verfügung.';
$_lang['setting_simplesearch.driver_class_path'] = 'Pfad zur Suchtreiber-Klasse';
$_lang['setting_simplesearch.driver_class_path_desc'] = 'Optional. Geben Sie den absoluten Pfad zur Suchtreiber-Klasse (driver_class) ein. Lassen Sie dieses Feld leer, um das Standard-Treiber-Verzeichnis zu verwenden.';
$_lang['setting_simplesearch.driver_db_specific'] = 'Suchtreiber-Datenbank-Spezifität';  // ?
$_lang['setting_simplesearch.driver_db_specific_desc'] = 'Setzen Sie diese Einstellung auf "Ja", wenn der Suchtreiber, den Sie verwenden, abgeleitete Klassen für verschiedene SQL-Treiber verwendet. (für SQL-Suche wählen Sie "Ja", für Solr- und andere index-basierte Arten der Suche wählen Sie "Nein".)';
