<?php
/**
 * Czech Default Topic for SimpleSearch
 * translated by Jiri Pavlicek jiri@pavlicek.cz
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language cz
 */
$_lang['simplesearch.no_results']     = 'Pro hledaný text "[[+query]]" nebyl nalezen žádný výsledek. Použijte, prosím, obecnější text pro hledání.';
$_lang['simplesearch.search']         = 'Hledat';
$_lang['simplesearch.results_found']  = '[[+count]] výskytů nalezeno pro "[[+text]]"';
$_lang['simplesearch.result_pages']   = 'Stránky výsledků hledání: ';
$_lang['simplesearch.index_finished'] = 'Dokončeno indexování [[+total]] dokumentů.';

/* Settings */
$_lang['setting_simplesearch.driver_class']            = 'Search Driver Class';
$_lang['setting_simplesearch.driver_class_desc']       = 'Change this to use a different search driver. SimpleSearch provides you with SimpleSearchDriverBasic and SimpleSearchDriverSolr (assuming you have a working Solr server).';
$_lang['setting_simplesearch.driver_class_path']       = 'Search Driver Class Path';
$_lang['setting_simplesearch.driver_class_path_desc']  = 'Optional. Set this to point to the absolute path where the search driver_class can be found. Leave blank to use the default driver directory.';
$_lang['setting_simplesearch.driver_db_specific']      = 'Search Driver Database Specificity';
$_lang['setting_simplesearch.driver_db_specific_desc'] = 'Set this to Yes if the search driver you are using uses derivative classes for different SQL drivers. (SQL searches will be Yes, Solr and other index-based searches will be No.)';


/* solr settings */
$_lang['setting_simplesearch.solr.hostname'] = 'Solr hostname';
$_lang['setting_simplesearch.solr.hostname_desc'] = 'Hostname Solr serveru.';
$_lang['setting_simplesearch.solr.port'] = 'Solr port';
$_lang['setting_simplesearch.solr.port_desc'] = 'Číslo portu Solr serveru.';
$_lang['setting_simplesearch.solr.path'] = 'Solr cesta';
$_lang['setting_simplesearch.solr.path_desc'] = 'Absolutní cesta k Solr. Pokud používáte multicore, bude to nejspíše vypadat takto: solr/corename';
$_lang['setting_simplesearch.solr.username'] = 'Solr jméno uživatele';
$_lang['setting_simplesearch.solr.username_desc'] = 'Jméno uživatele pro HTTP authentizaci (pokud je zapnuta).';
$_lang['setting_simplesearch.solr.password'] = 'Solr heslo';
$_lang['setting_simplesearch.solr.password_desc'] = 'Heslo HTTP authentizace (pokud je zapnuta).';
$_lang['setting_simplesearch.solr.proxy_host'] = 'Solr Proxy hostname';
$_lang['setting_simplesearch.solr.proxy_host_desc'] = 'Hostname proxy serveru pro Solr (pokud je).';
$_lang['setting_simplesearch.solr.proxy_port'] = 'Solr Proxy port';
$_lang['setting_simplesearch.solr.proxy_port_desc'] = 'Číslo portu proxy server pro Solr (pokud je).';
$_lang['setting_simplesearch.solr.proxy_username'] = 'Solr proxy jméno uživatele';
$_lang['setting_simplesearch.solr.proxy_username_desc'] = 'Jméno uživatele proxy serveru pro Solr (pokud je).';
$_lang['setting_simplesearch.solr.proxy_password'] = 'Solr Proxy heslo';
$_lang['setting_simplesearch.solr.proxy_password_desc'] = 'Heslo proxy serveru pro Solr (pokud je).';
$_lang['setting_simplesearch.solr.timeout'] = 'Časový limit Solr požadavků';
$_lang['setting_simplesearch.solr.timeout_desc'] = 'Maximální čas v sekundách pro http data přenášená k Solr.';
$_lang['setting_simplesearch.solr.ssl'] = 'Solr používá SSL';
$_lang['setting_simplesearch.solr.ssl_desc'] = 'Pokud ano, připojení na Solr je pomocí SSL.';
$_lang['setting_simplesearch.solr.ssl_cert'] = 'Solr SSL certifikát';
$_lang['setting_simplesearch.solr.ssl_cert_desc'] = 'Název souboru s PEM souborem obsahujícím privátní klíč a certifikát (sloučené v tomto pořadí)';
$_lang['setting_simplesearch.solr.ssl_key'] = 'Solr SSL klíč';
$_lang['setting_simplesearch.solr.ssl_key_desc'] = 'Název souboru s PEM souborem obsahujícím pouze privátní klíč.';
$_lang['setting_simplesearch.solr.ssl_keypassword'] = 'Heslo k Solr SSL klíči';
$_lang['setting_simplesearch.solr.ssl_keypassword_desc'] = 'Heslo k privátnímu klíči pro SSL klíč.';
$_lang['setting_simplesearch.solr.ssl_cainfo'] = 'Solr SSL CA certifikát';
$_lang['setting_simplesearch.solr.ssl_cainfo_desc'] = 'Jméno souboru obsahujícího jeden nebo více CA certifikátů pro ověření';
$_lang['setting_simplesearch.solr.ssl_capath'] = 'Cesta k Solr SSL CA certifkátu';
$_lang['setting_simplesearch.solr.ssl_capath_desc'] = 'Jméno adresáře obsahujícího více CA certifikátů pro ověření.';
