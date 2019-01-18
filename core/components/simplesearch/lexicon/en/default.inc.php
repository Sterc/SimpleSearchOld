<?php
/**
 * English Default Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language en
 */
$_lang['simplesearch.no_results']     = 'There were no search results for the search "[[+query]]". Please try using more general terms to get more results.';
$_lang['simplesearch.search']         = 'Search';
$_lang['simplesearch.results_found']  = '[[+count]] Results found for "[[+text]]"';
$_lang['simplesearch.result_pages']   = 'Result pages:';
$_lang['simplesearch.index_finished'] = 'Finished indexing [[+total]] Resources.';

/* Settings */
$_lang['setting_simplesearch.driver_class']            = 'Search Driver Class';
$_lang['setting_simplesearch.driver_class_desc']       = 'Change this to use a different search driver. SimpleSearch provides you with SimpleSearchDriverBasic and SimpleSearchDriverSolr (assuming you have a working Solr server).';
$_lang['setting_simplesearch.driver_class_path']       = 'Search Driver Class Path';
$_lang['setting_simplesearch.driver_class_path_desc']  = 'Optional. Set this to point to the absolute path where the search driver_class can be found. Leave blank to use the default driver directory.';
$_lang['setting_simplesearch.driver_db_specific']      = 'Search Driver Database Specificity';
$_lang['setting_simplesearch.driver_db_specific_desc'] = 'Set this to Yes if the search driver you are using uses derivative classes for different SQL drivers. (SQL searches will be Yes, Solr and other index-based searches will be No.)';
$_lang['setting_simplesearch.autosuggest_tv']          = 'Autosuggest Template Variable';
$_lang['setting_simplesearch.autosuggest_tv_desc']     = 'Provide the TV ID or name to use for generating a list of autosuggest search terms.';

/* solr settings */
$_lang['setting_simplesearch.solr.hostname']             = 'Solr Hostname';
$_lang['setting_simplesearch.solr.hostname_desc']        = 'The hostname for the Solr server.';
$_lang['setting_simplesearch.solr.port']                 = 'Solr Port';
$_lang['setting_simplesearch.solr.port_desc']            = 'The port number for the Solr server.';
$_lang['setting_simplesearch.solr.path']                 = 'Solr Path';
$_lang['setting_simplesearch.solr.path_desc']            = 'The absolute path to Solr. If you are running multicore, this will most likely look like: solr/corename';
$_lang['setting_simplesearch.solr.username']             = 'Solr Username';
$_lang['setting_simplesearch.solr.username_desc']        = 'The username used for HTTP Authentication, if any.';
$_lang['setting_simplesearch.solr.password']             = 'Solr Password';
$_lang['setting_simplesearch.solr.password_desc']        = 'The HTTP Authentication password, if any.';
$_lang['setting_simplesearch.solr.proxy_host']           = 'Solr Proxy Hostname';
$_lang['setting_simplesearch.solr.proxy_host_desc']      = 'The hostname for the proxy server to Solr, if any.';
$_lang['setting_simplesearch.solr.proxy_port']           = 'Solr Proxy Port';
$_lang['setting_simplesearch.solr.proxy_port_desc']      = 'The port number for the proxy server to Solr, if any.';
$_lang['setting_simplesearch.solr.proxy_username']       = 'Solr Proxy Username';
$_lang['setting_simplesearch.solr.proxy_username_desc']  = 'The username for the proxy server to Solr, if any.';
$_lang['setting_simplesearch.solr.proxy_password']       = 'Solr Proxy Password';
$_lang['setting_simplesearch.solr.proxy_password_desc']  = 'The password for the proxy server to Solr, if any.';
$_lang['setting_simplesearch.solr.timeout']              = 'Solr Request Timeout';
$_lang['setting_simplesearch.solr.timeout_desc']         = 'This is maximum time in seconds allowed for the http data transfer operation to Solr.';
$_lang['setting_simplesearch.solr.ssl']                  = 'Solr Use SSL';
$_lang['setting_simplesearch.solr.ssl_desc']             = 'If Yes, will connect to Solr via SSL.';
$_lang['setting_simplesearch.solr.ssl_cert']             = 'Solr SSL Cert';
$_lang['setting_simplesearch.solr.ssl_cert_desc']        = 'File name to a PEM-formatted file containing the private key + private certificate (concatenated in that order)';
$_lang['setting_simplesearch.solr.ssl_key']              = 'Solr SSL Key';
$_lang['setting_simplesearch.solr.ssl_key_desc']         = 'File name to a PEM-formatted private key file only.';
$_lang['setting_simplesearch.solr.ssl_keypassword']      = 'Solr SSL Key Password';
$_lang['setting_simplesearch.solr.ssl_keypassword_desc'] = 'Password for private key for SSL key.';
$_lang['setting_simplesearch.solr.ssl_cainfo']           = 'Solr SSL CA Certificates';
$_lang['setting_simplesearch.solr.ssl_cainfo_desc']      = 'Name of file holding one or more CA certificates to verify peer with.';
$_lang['setting_simplesearch.solr.ssl_capath']           = 'Solr SSL CA Certificate Path';
$_lang['setting_simplesearch.solr.ssl_capath_desc']      = 'Name of directory holding multiple CA certificates to verify peer with.';

/* elasticsearch settings */
$_lang['setting_simplesearch.elastic.hostname']           = 'ElasticSearch Hostname';
$_lang['setting_simplesearch.elastic.hostname_desc']      = 'The hostname for elastic search in a \'http://127.0.0.1\' format';
$_lang['setting_simplesearch.elastic.port']               = 'ElasticSearch Port';
$_lang['setting_simplesearch.elastic.port_desc']          = 'The port number for elasticsearch. Default is 9200.';
$_lang['setting_simplesearch.elastic.index']              = 'ElasticSearch Index name';
$_lang['setting_simplesearch.elastic.index_desc']         = 'The name of index in ElasticSearch. Default is: simplesearchindex';
$_lang['setting_simplesearch.elastic.search_fields']      = 'ElasticSearch Search fields';
$_lang['setting_simplesearch.elastic.search_fields_desc'] = 'Fields that will be searched. Use comma \',\' as a delimiter. You can add \'^number\' after field name to boost the field. Default: pagetitle^20,introtext^10,alias^5,content^1';
$_lang['setting_simplesearch.elastic.search_boost']       = 'ElasticSearch boost option';
$_lang['setting_simplesearch.elastic.search_boost_desc']  = 'By setting this option you can boost results by a field value. Accepted format: fieldname=value^boost|fieldname2=value2^boost2. Example: class_key=modDocument^1.5|class_key=CollectionsContainer^1.2';
