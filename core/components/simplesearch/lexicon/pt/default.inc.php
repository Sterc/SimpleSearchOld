<?php
/**
 * Portuguese Default Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language pt
 */

include_once(dirname(dirname(__FILE__)).'/en/default.inc.php'); // fallback for missing defaults or new additions

$_lang['simplesearch.no_results'] = 'Não foram encontrados resultados para a pesquisa "[[+query]]". Por favor, tente utilizar termos mais genéricos para obter mais resultados.';
$_lang['simplesearch.search'] = 'Pesquisa';
$_lang['simplesearch.results_found'] = '[[+count]] Resultado(s) encontrado(s) para a pesquisa "[[+text]]"';
$_lang['simplesearch.result_pages'] = 'Páginas de resultados:';
$_lang['simplesearch.index_finished'] = 'Indexação de [[+total]] Páginas terminada.';

/* Settings */
$_lang['setting_simplesearch.driver_class'] = 'Classe de divisão de pesquisa';
$_lang['setting_simplesearch.driver_class_desc'] = 'Modifique esta opção para utilizar um controlador de pesquisa diferente. O SimpleSearch fornece-lhe as opções SimpleSearchDriverBasic e SimpleSearchDriverSolr (Assumindo que já tem um servidor Solr funcional).';
$_lang['setting_simplesearch.driver_class_path'] = 'Caminho da Classe do Controlador de Pesquisa';
$_lang['setting_simplesearch.driver_class_path_desc'] = 'Opcional. Defina esta opção para apontar para o caminho absoluto onde o driver_class pode ser encontrado. Deixe em branco para utilizar a directoria de controladores pré-definida.';
$_lang['setting_simplesearch.driver_db_specific'] = 'Controlador de Base de dados específico da Pesquisa';
$_lang['setting_simplesearch.driver_db_specific_desc'] = 'Defina esta opção para "Sim" se o controlador da pesquisa que está a utilizar, usa classes derivativas para diferentes controladores de SQL. (Pesquisas de SQL serão definidas como "Sim", Solr e outras pesquisas baseadas em índices serão definidas como "Não".)';
$_lang['setting_simplesearch.autosuggest_tv'] = 'Varável de Modelo (tplvar) para Auto-Sugestão';
$_lang['setting_simplesearch.autosuggest_tv_desc'] = 'Forneça o ID do TV ou o nome a utilizar para gerar a lista de termos de pesquisa para as auto-sugestões.';
