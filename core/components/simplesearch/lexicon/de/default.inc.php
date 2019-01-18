<?php
/**
 * German Default Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language de
 */
$_lang['simplesearch.no_results']     = 'Es konnten keine Ergebnisse für den Suchbegriff "[[+query]]" gefunden werden. Bitte versuchen Sie es mit allgemeineren Suchbegriffen, um mehr Ergebnisse zu erhalten.';
$_lang['simplesearch.search']         = 'Suchen';
$_lang['simplesearch.results_found']  = '[[+count]] Ergebnis(se) für "[[+text]]" gefunden';
$_lang['simplesearch.result_pages']   = 'Ergebnisseiten:';
$_lang['simplesearch.index_finished'] = 'Indizierung von [[+total]] Ressourcen beendet.';

/* Settings */
$_lang['setting_simplesearch.driver_class']            = 'Suchtreiber-Klasse';
$_lang['setting_simplesearch.driver_class_desc']       = 'Ändern Sie diese Einstellung, um einen anderen Suchtreiber zu verwenden. SimpleSearch stellt Ihnen die Treiber SimpleSearchDriverBasic und SimpleSearchDriverSolr (vorausgesetzt, Sie verfügen über einen funktionierenden Solr-Server) zur Verfügung.';
$_lang['setting_simplesearch.driver_class_path']       = 'Pfad zur Suchtreiber-Klasse';
$_lang['setting_simplesearch.driver_class_path_desc']  = 'Optional. Geben Sie den absoluten Pfad zur Suchtreiber-Klasse (driver_class) ein. Lassen Sie dieses Feld leer, um das Standard-Treiber-Verzeichnis zu verwenden.';
$_lang['setting_simplesearch.driver_db_specific']      = 'Suchtreiber-Datenbank-Spezifität';  // ?
$_lang['setting_simplesearch.driver_db_specific_desc'] = 'Setzen Sie diese Einstellung auf "Ja", wenn der Suchtreiber, den Sie verwenden, abgeleitete Klassen für verschiedene SQL-Treiber verwendet. (für SQL-Suche wählen Sie "Ja", für Solr- und andere index-basierte Arten der Suche wählen Sie "Nein".)';


/* solr settings */
$_lang['setting_simplesearch.solr.hostname'] = 'Solr-Hostname';
$_lang['setting_simplesearch.solr.hostname_desc'] = 'Der Hostname des Solr-Servers.';
$_lang['setting_simplesearch.solr.port'] = 'Solr-Port';
$_lang['setting_simplesearch.solr.port_desc'] = 'Die Port-Nummer des Solr-Servers.';
$_lang['setting_simplesearch.solr.path'] = 'Solr-Pfad';
$_lang['setting_simplesearch.solr.path_desc'] = 'Der absolute Pfad zu Solr. Wenn Sie ein Multicore-System einsetzen, sieht dieser vermutlich so aus: solr/corename';
$_lang['setting_simplesearch.solr.username'] = 'Solr-Benutzername';
$_lang['setting_simplesearch.solr.username_desc'] = 'Der Benutzername, der für die HTTP-Authentifizierung verwendet wird, sofern nötig.';
$_lang['setting_simplesearch.solr.password'] = 'Solr-Passwort';
$_lang['setting_simplesearch.solr.password_desc'] = 'Das HTTP-Authentifizierungs-Password, sofern vorhanden.';
$_lang['setting_simplesearch.solr.proxy_host'] = 'Solr-Proxy-Hostname';
$_lang['setting_simplesearch.solr.proxy_host_desc'] = 'Der Hostname für den Proxy-Server, über den Solr aufgerufen wird, sofern vorhanden.';
$_lang['setting_simplesearch.solr.proxy_port'] = 'Solr-Proxy-Port';
$_lang['setting_simplesearch.solr.proxy_port_desc'] = 'Die Portnummer für den Proxy-Server, über den Solr aufgerufen wird, sofern vorhanden.';
$_lang['setting_simplesearch.solr.proxy_username'] = 'Solr-Proxy-Benutzername';
$_lang['setting_simplesearch.solr.proxy_username_desc'] = 'Der Benutzername für den Proxy-Server, über den Solr aufgerufen wird, sofern vorhanden.';
$_lang['setting_simplesearch.solr.proxy_password'] = 'Solr-Proxy-Passwort';
$_lang['setting_simplesearch.solr.proxy_password_desc'] = 'Das Passwort für den Proxy-Server, über den Solr aufgerufen wird, sofern vorhanden.';
$_lang['setting_simplesearch.solr.timeout'] = 'Solr-Request-Timeout';
$_lang['setting_simplesearch.solr.timeout_desc'] = 'Dies ist die maximale Zeit in Sekunden, die für den HTTP-Datentransfer zu Solr erlaubt ist.';
$_lang['setting_simplesearch.solr.ssl'] = 'SSL für Solr nutzen';
$_lang['setting_simplesearch.solr.ssl_desc'] = 'Wenn Sie hier "Ja" wählen, wird die Verbindung zu Solr via SSL aufgebaut.';
$_lang['setting_simplesearch.solr.ssl_cert'] = 'Solr-SSL-Zertifikat';
$_lang['setting_simplesearch.solr.ssl_cert_desc'] = 'Dateiname einer PEM-formatierten Datei, die den privaten Schlüssel und das private Zertifikat enthält (verknüpft in dieser Reihenfolge)';
$_lang['setting_simplesearch.solr.ssl_key'] = 'Solr-SSL-Schlüssel';
$_lang['setting_simplesearch.solr.ssl_key_desc'] = 'Dateiname einer PEM-formatierten Datei, die nur den privaten Schlüssel enthält.';
$_lang['setting_simplesearch.solr.ssl_keypassword'] = 'Solr-SSL-Schlüssel-Passwort';
$_lang['setting_simplesearch.solr.ssl_keypassword_desc'] = 'Passwort für den privaten Schlüssel für den SSL-Schlüssel.';
$_lang['setting_simplesearch.solr.ssl_cainfo'] = 'Solr-SSL-CA-Zertifikate';
$_lang['setting_simplesearch.solr.ssl_cainfo_desc'] = 'Name einer Datei, die ein oder mehrere CA-Zertifikate enthält, mittels derer der Peer (die Gegenstelle) verifiziert werden kann.';
$_lang['setting_simplesearch.solr.ssl_capath'] = 'Solr-SSL-CA-Zertifikat-Pfad';
$_lang['setting_simplesearch.solr.ssl_capath_desc'] = 'Name eines Verzeichnisses, das mehrere CA-Zertifikate enthält, mittels derer der Peer (die Gegenstelle) verifiziert werden kann.';

/* elasticsearch settings */
$_lang['setting_simplesearch.elastic.hostname'] = 'ElasticSearch-Hostname';
$_lang['setting_simplesearch.elastic.hostname_desc'] = 'Der Hostname für ElasticSearch im Format "http://127.0.0.1"';
$_lang['setting_simplesearch.elastic.port'] = 'ElasticSearch-Port';
$_lang['setting_simplesearch.elastic.port_desc'] = 'Die Port-Nummer für ElasticSearch. Der Standard-Port ist 9200.';
$_lang['setting_simplesearch.elastic.index'] = 'ElasticSearch-Indexname';
$_lang['setting_simplesearch.elastic.index_desc'] = 'Der Name des Index in ElasticSearch. Standard ist "simplesearchindex"';
$_lang['setting_simplesearch.elastic.search_fields'] = 'ElasticSearch-Suchfelder';
$_lang['setting_simplesearch.elastic.search_fields_desc'] = 'Felder, in denen gesucht wird. Verwenden Sie Kommata als Trennzeichen. Sie können "^nummer" nach dem Feldnamen hinzufügen, um dem Feld eine höhere Priorität zu verleihen. Standard: pagetitle^20,introtext^10,alias^5,content^1';
$_lang['setting_simplesearch.elastic.search_boost'] = 'ElasticSearch-Prioritätsoption';
$_lang['setting_simplesearch.elastic.search_boost_desc'] = 'Durch die Verwendung dieser Einstellung können Sie Ergebnissen durch einen Feldwert eine höhere Priorität zuordnen. Zu verwendendes Format: feldname=wert^faktor|feldname2=wert2^faktor2. Beispiel: class_key=modDocument^1.5|class_key=CollectionsContainer^1.2';
