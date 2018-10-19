<?php
/**
 * Japanese Properties Lexicon Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language ja
 */
$_lang['simplesearch.activefacet_desc'] = 'The current active facet. Leave this alone unless you want a result to show from a non-standard facet derived through a postHook.';
$_lang['simplesearch.containertpl_desc'] = 'The chunk that will be used to wrap all the search results, pagination and message.';
$_lang['simplesearch.contexts_desc'] = 'The contexts to search. Defaults to the current context if none are explicitly specified.';
$_lang['simplesearch.currentpagetpl_desc'] = 'The chunk to use for the current pagination link.';
$_lang['simplesearch.depth_desc'] = 'If idtype is set to parents, the depth down the Resource tree that will be searched with the specified IDs.';
$_lang['simplesearch.documents'] = 'Documents';
$_lang['simplesearch.exclude_desc'] = 'A comma-separated list of resource IDs to exclude from search eg. "10,15,19". This will exclude the resources with the ID "10","15" or "19".';
$_lang['simplesearch.extractellipsis_desc'] = 'The string used to wrap extract results with. Defaults to an ellipsis.';
$_lang['simplesearch.extractlength_desc'] = 'The number of characters for the content extraction of each search result.';
$_lang['simplesearch.facetlimit_desc'] = 'The number of non-active-facet results to show on the main results page. Defaults to 5.';
$_lang['simplesearch.fieldpotency_desc'] = 'Specify weighting of search results. Example: pagetitle:3,alias:10 will give 3 points if result is found in pagetitle, 10 points if result is found in alias.';
$_lang['simplesearch.get'] = 'get';
$_lang['simplesearch.hidemenu_desc'] = 'Whether or not to return Resources that have hidemenu on. 0 shows only visible Resources, 1 shows only hidden Resources, 2 shows both.';
$_lang['simplesearch.hidemenu_visible'] = 'Visible Only';
$_lang['simplesearch.hidemenu_hidden'] = 'Hidden Only';
$_lang['simplesearch.hidemenu_both'] = 'Show All';
$_lang['simplesearch.highlightclass_desc'] = 'The CSS class name to add to highlighted terms in results.';
$_lang['simplesearch.highlightresults_desc'] = 'Whether or not to highlight the search term in results.';
$_lang['simplesearch.highlighttag_desc'] = 'The html tag to wrap the highlighted term within search results.';
$_lang['simplesearch.ids_desc'] = 'A comma-separated list of IDs to restrict the search to.';
$_lang['simplesearch.idtype_desc'] = 'The type of restriction for the ids parameter. If parents, will add all the children of the IDs in the ids parameter to the search. If documents, will only use the specified IDs in the search.';
$_lang['simplesearch.includetvs_desc'] = 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false. Turning this on might make your search slower if you have lots of TVs.';
$_lang['simplesearch.landing_desc'] = 'The Resource that the SimpleSearch snippet is called on, that will display the results of the search.';
$_lang['simplesearch.match'] = 'Match';
$_lang['simplesearch.maxwords_desc'] = 'The maximum number of words to include in the search. Only applicable if useAllWords is off.';
$_lang['simplesearch.method_desc'] = 'Whether to send the search over POST or GET.';
$_lang['simplesearch.minchars_desc'] = 'The minimum number of characters to trigger the search.';
$_lang['simplesearch.offsetindex_desc'] = 'The name of the REQUEST parameter to use for the pagination offset.';
$_lang['simplesearch.pagelimit_desc'] = 'The maximum number of page links to display when rendering page navigation controls.';
$_lang['simplesearch.pagetpl_desc'] = 'The chunk to use for a pagination link.';
$_lang['simplesearch.pagefirsttpl_desc'] = 'The chunk to use for the first page pagination link.';
$_lang['simplesearch.pagelasttpl_desc'] = 'The chunk to use for the last page pagination link.';
$_lang['simplesearch.pageprevtpl_desc'] = 'The chunk to use for the previous page pagination link.';
$_lang['simplesearch.pagenexttpl_desc'] = 'The chunk to use for the next page pagination link.';
$_lang['simplesearch.pagingseparator_desc'] = 'The separator to use between pagination links.';
$_lang['simplesearch.parents'] = 'Parents';
$_lang['simplesearch.partial'] = 'Partial';
$_lang['simplesearch.perpage_desc'] = 'The number of search results to show per page.';
$_lang['simplesearch.placeholderprefix_desc'] = 'The prefix for global placeholders set by this snippet.';
$_lang['simplesearch.post'] = 'post';
$_lang['simplesearch.posthooks_desc'] = 'Any hooks to run post-search that can add faceted results to the search result set.';
$_lang['simplesearch.processtvs_desc'] = 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false. Note: TVs are processed during indexing for Solr searching, so there is no need to do this here.';
$_lang['simplesearch.searchindex_desc'] = 'The name of the REQUEST parameter that the search will use.';
$_lang['simplesearch.showextract_desc'] = 'Whether or not to show an extract of the content of each search result.';
$_lang['simplesearch.sortby_desc'] = 'A comma-separated list of Resource fields to sort the results by. Leave blank to sort by relevance and score.';
$_lang['simplesearch.sortdir_desc'] = 'A comma-separated list of directions to sort the results by. Must match the number of items in the sortBy parameter.';
$_lang['simplesearch.tpl_desc'] = 'The chunk that will be used to display the contents of each search result.';
$_lang['simplesearch.tpl_form_desc'] = 'The chunk that will be used to display the search form.';
$_lang['simplesearch.toplaceholder_desc'] = 'Whether to set the output to directly return, or set to a placeholder with this propertys name.';
$_lang['simplesearch.useallwords_desc'] = 'If true, will only find results with all the specified search words.';
$_lang['simplesearch.searchstyle_desc'] = 'To search either with a partial LIKE search, or a relevance-based MATCH search.';
$_lang['simplesearch.andterms_desc'] = 'Whether or not to add a logical AND between words.';
$_lang['simplesearch.matchwildcard_desc'] = 'Enable wildcard search. Set to false to do exact searching on a search term.';
$_lang['simplesearch.docfields_desc'] = 'A comma-separated list of specific Resource fields to search.';
$_lang['simplesearch.urlscheme_desc'] = 'The URL scheme you want: http, https, full, abs, relative, etc. See the $modx->makeUrl() documentation. This is used when the pagination links are generated.';
$_lang['simplesearch.url_relative'] = 'Relative';
$_lang['simplesearch.url_absolute'] = 'Absolute';
$_lang['simplesearch.url_full'] = 'Full';
$_lang['simplesearch.ascending'] = 'Ascending';
$_lang['simplesearch.descending'] = 'Descending';
