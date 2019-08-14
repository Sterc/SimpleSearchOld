<?php
/**
 * Portuguese Properties Lexicon Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language pt
 */

include_once(dirname(dirname(__FILE__)).'/en/properties.inc.php'); // fallback for missing defaults or new additions

$_lang['simplesearch.activefacet_desc'] = 'A faceta ativa atual. Não altere esta opção, a menos que queira que um resultado seja mostrado de uma faceta não pré-definida derivada de um postHook.';
$_lang['simplesearch.containertpl_desc'] = 'O Chunk que será utilizado para agrupar todos os resultados da pesquisa, paginação e mensagem.';
$_lang['simplesearch.contexts_desc'] = 'Os contextos para pesquisar. O pré-definido é o contexto atual, se nenhum for explicitamente especificado.';
$_lang['simplesearch.currentpagetpl_desc'] = 'O Chunk a ser usado no link de paginação atual.';
$_lang['simplesearch.depth_desc'] = 'Se o idtype for definido como "pai(s)", a profundidade da árvore das Páginas (Recursos) será pesquisada com os IDs especificados.';
$_lang['simplesearch.documents'] = 'Documentos';
$_lang['simplesearch.exclude_desc'] = 'Uma lista separada por vírgulas de IDs de páginas (recursos) para excluir da pesquisa, por exemplo. "10,15,19". Isto irá excluir as páginas (recursos) com o ID "10", "15" ou "19".';
$_lang['simplesearch.extractellipsis_desc'] = 'A string usada para envolver a extração dos resultados. Pré-definição para reticências.';
$_lang['simplesearch.extractlength_desc'] = 'O número de caracteres para a extração de conteúdo de cada resultado da pesquisa.';
$_lang['simplesearch.facetlimit_desc'] = 'O número de resultados sem facetas ativas, para mostrar na página principal de resultados. A pré-definição é 5.';
$_lang['simplesearch.fieldpotency_desc'] = 'Especifique a ponderação dos resultados da pesquisa. Exemplo: pagetitle:3,alias:10 dará 3 pontos se o resultado for encontrado no campo pagetitle, e 10 pontos se o resultado for encontrado no campo alias.';
$_lang['simplesearch.get'] = 'get';
$_lang['simplesearch.hidemenu_desc'] = 'Se deve ou não devolver páginas (recursos) que tenham a opção hidemenu (Ocultar do Menú) ativa. 0 mostra apenas Páginas (Recursos) visíveis, 1 mostra apenas Páginas (Recursos) ocultos, 2 mostra ambos.';
$_lang['simplesearch.hidemenu_visible'] = 'Apenas Visíveis';
$_lang['simplesearch.hidemenu_hidden'] = 'Apenas Ocultos';
$_lang['simplesearch.hidemenu_both'] = 'Mostrar Todos';
$_lang['simplesearch.highlightclass_desc'] = 'O nome da classe CSS para adicionar aos termos destacados nos resultados.';
$_lang['simplesearch.highlightresults_desc'] = 'Se deve ou não destacar o termo de pesquisa nos resultados.';
$_lang['simplesearch.highlighttag_desc'] = 'A tag html para envolver o termo destacado nos resultados da pesquisa.';
$_lang['simplesearch.ids_desc'] = 'Uma lista de IDs separados por vírgulas para restringir a pesquisa.';
$_lang['simplesearch.idtype_desc'] = 'O tipo de restrição para o parâmetro "ids". Se representarem páginas pai, os respetivos filhos dos IDs serão adicionados no parâmetro "ids" à pesquisa. Se representarem documentos, serão utilizados somente os IDs especificados na pesquisa.';
$_lang['simplesearch.includetvs_desc'] = 'Indica se os valores de TemplateVar devem ser incluídos nas propriedades disponíveis para cada modelo (template) de página (recurso). A pré-definição é "falso". Ativar esta opção pode tornar a sua pesquisa mais lenta se existirem muitos TVs.';
$_lang['simplesearch.landing_desc'] = 'A página (recurso) em que o snippet SimpleSearch é chamado, que exibirá os resultados da pesquisa.';
$_lang['simplesearch.match'] = 'Correspondência';
$_lang['simplesearch.maxwords_desc'] = 'O número máximo de palavras a serem incluídas na pesquisa. Aplicável apenas se a opção useAllWords estiver desativada.';
$_lang['simplesearch.method_desc'] = 'Se envia a pesquisa através de POST ou GET.';
$_lang['simplesearch.minchars_desc'] = 'O número mínimo de caracteres para acionar a pesquisa.';
$_lang['simplesearch.offsetindex_desc'] = 'O nome do parâmetro REQUEST a ser usado para a deslocação da paginação.';
$_lang['simplesearch.pagelimit_desc'] = 'O número máximo de links de páginas a serem exibidos ao renderizar os controlos de navegação da página.';
$_lang['simplesearch.pagetpl_desc'] = 'O Chunk a ser usado para um link de paginação.';
$_lang['simplesearch.pagefirsttpl_desc'] = 'O Chunk a ser usado no primeiro link de paginação da página.';
$_lang['simplesearch.pagelasttpl_desc'] = 'O Chunk a ser usado para o último link de paginação da página.';
$_lang['simplesearch.pageprevtpl_desc'] = 'O Chunk a ser usado para o link de paginação da página anterior.';
$_lang['simplesearch.pagenexttpl_desc'] = 'O Chunk a ser usado para o link de paginação da próxima página.';
$_lang['simplesearch.pagingseparator_desc'] = 'O separador para usar entre links de paginação.';
$_lang['simplesearch.parents'] = 'Pais';
$_lang['simplesearch.partial'] = 'Parcial';
$_lang['simplesearch.perpage_desc'] = 'O número de resultados da pesquisa a apresentar por página.';
$_lang['simplesearch.placeholderprefix_desc'] = 'O prefixo para apontadores globais definidos por este snippet.';
$_lang['simplesearch.post'] = 'post';
$_lang['simplesearch.posthooks_desc'] = 'Quaisquer hooks a executar na pós-pesquisa que podem adicionar resultados facetados ao conjunto de resultados da pesquisa.';
$_lang['simplesearch.processtvs_desc'] = 'Indica se os valores de TemplateVar devem ser renderizados como seriam na página (recurso) que a ser resumida. O padrão é "falso". Nota: As TVs são processadas durante a indexação para pesquisa do Solr, portanto, não há necessidade de o fazer aqui.';
$_lang['simplesearch.searchindex_desc'] = 'O nome do parâmetro REQUEST que a pesquisa utilizará.';
$_lang['simplesearch.showextract_desc'] = 'Mostrar ou não um extrato do conteúdo de cada resultado da pesquisa.';
$_lang['simplesearch.sortby_desc'] = 'Uma lista separada por vírgulas de campos de páginas (recursos) para classificar os resultados. Deixe vazio para classificar por relevância e pontuação.';
$_lang['simplesearch.sortdir_desc'] = 'Uma lista de direções separadas por vírgulas para classificar os resultados. Deve corresponder ao número de elementos no parâmetro sortBy.';
$_lang['simplesearch.tpl_desc'] = 'O Chunk que será usado para exibir o conteúdo de cada resultado da pesquisa.';
$_lang['simplesearch.tpl_form_desc'] = 'O Chunk que será usado para exibir o formulário de pesquisa.';
$_lang['simplesearch.toplaceholder_desc'] = 'Se deseja definir a saída para retornar diretamente ou definir como um apontador com este nome de propriedade.';
$_lang['simplesearch.useallwords_desc'] = 'Se definido como verdadeiro, só encontrará resultados com todas as palavras de pesquisa especificadas.';
$_lang['simplesearch.searchstyle_desc'] = 'Para pesquisar como uma pesquisa parcial de tipo "LIKE", ou uma pesquisa baseada em relevância de tipo "MATCH".';
$_lang['simplesearch.andterms_desc'] = 'Se deve ou não adicionar um AND lógico entre palavras.';
$_lang['simplesearch.matchwildcard_desc'] = 'Ativar pesquisa com base em caracter de substituição (wildcard). Defina como "false" para fazer uma pesquisa exata num termo de pesquisa.';
$_lang['simplesearch.docfields_desc'] = 'Uma lista separada por vírgulas de campos de páginas (recursos) específicas para pesquisa.';
$_lang['simplesearch.urlscheme_desc'] = 'O esquema de URL que pretende: http, https, full, abs, relative, etc. Consulte a documentação relativa à diretiva $modx->makeUrl(). Isto é utilizado no momento em que os links de paginação são gerados.';
$_lang['simplesearch.url_relative'] = 'Relativo';
$_lang['simplesearch.url_absolute'] = 'Absoluto';
$_lang['simplesearch.url_full'] = 'Completo';
$_lang['simplesearch.ascending'] = 'Ascendente';
$_lang['simplesearch.descending'] = 'Descendente';
