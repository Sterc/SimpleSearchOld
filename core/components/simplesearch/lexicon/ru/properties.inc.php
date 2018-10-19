<?php
/**
 * English Properties Lexicon Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language ru
 */
$_lang['simplesearch.containertpl_desc'] = 'Чанк который будет использован как шаблон обёртка для результатов поиска, разбивки на страницы и сообщений.';
$_lang['simplesearch.contexts_desc'] = 'Контексты в которых будет происходить поиск. По умолчанию текущий контекст, если не указан другой.';
$_lang['simplesearch.currentpagetpl_desc'] = 'Чанк который будет использован как шаблон для ссылки на текущую страницу в разбивке на страницы.';
$_lang['simplesearch.depth_desc'] = 'Если idtype установлен parents, глубина на которую будет происходить поиск в дереве ресурсов.';
$_lang['simplesearch.documents'] = 'Documents';
$_lang['simplesearch.exclude_desc'] = 'A comma-separated list of resource IDs to exclude from search eg. "10,15,19". This will exclude the resources with the ID "10","15" or "19".';
$_lang['simplesearch.extractellipsis_desc'] = 'Строка которая используется для обёртывания извлечённого из содержимого ресурса фрагмента. По умолчанию многоточие.';
$_lang['simplesearch.extractlength_desc'] = 'Количество символов  которые будут извлечены из содержимого ресурса для показа в результатах поиска.';
$_lang['simplesearch.get'] = 'get';
$_lang['simplesearch.hidemenu_desc'] = 'Включить или нет в поиск ресурсы у которых отмечен пункт &laquo;Не показывать в меню&raquo;. 0 искать только в ресурсах видимых в меню, 1 искать только в ресурсах не видимых в меню, 2 искать и в тех и в других.';
$_lang['simplesearch.hidemenu_visible'] = 'Искать в видимых';
$_lang['simplesearch.hidemenu_hidden'] = 'Искать в скрытых';
$_lang['simplesearch.hidemenu_both'] = 'Искать в скрытых и видимых';
$_lang['simplesearch.highlightclass_desc'] = 'Имя CSS класса который будет добавляться для подсветки результатов поиска.';
$_lang['simplesearch.highlightresults_desc'] = 'Подсвечивать или нет поисковый запрос в результатах поиска.';
$_lang['simplesearch.highlighttag_desc'] = 'HTML тег которым будет обёрнут подсвеченный поисковый запрос в результатах поиска.';
$_lang['simplesearch.ids_desc'] = 'Разделённый запятыми список идентификаторов ресурсов которыми будет ограничен поиск.';
$_lang['simplesearch.idtype_desc'] = 'Тип ограничения для параметра ids. Если parents, в поиске будут участвовать все дочернии документы указанного родителя. Если documents, в поиске будут участвовать только ресурсы с указанными идентификаторами.';
$_lang['simplesearch.includetvs_desc'] = 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.';
$_lang['simplesearch.landing_desc'] = 'Ресурс на котором будет вызов сниппета SimpleSearch отображающий результаты поиска.';
$_lang['simplesearch.match'] = 'Match';
$_lang['simplesearch.maxwords_desc'] = 'Максимальное количество слов по которым будет происходить поиск. Применяется только если useAllWords выключен.';
$_lang['simplesearch.method_desc'] = 'Какой метод будет использован в форме поиска, POST или GET.';
$_lang['simplesearch.minchars_desc'] = 'The minimum number of characters to trigger the search.';
$_lang['simplesearch.offsetindex_desc'] = 'Имя параметра который будет использоваться как смещение для разбивки на страницы результатов поиска.';
$_lang['simplesearch.pagetpl_desc'] = 'Чанк который будет использован как шаблон для ссылок в разбивке на страницы.';
$_lang['simplesearch.pagingseparator_desc'] = 'Разделитель который будет помещён между ссылками в разбивке на страницы.';
$_lang['simplesearch.parents'] = 'Parents';
$_lang['simplesearch.partial'] = 'Partial';
$_lang['simplesearch.perpage_desc'] = 'Количество результатов поиска для отображения на странице..';
$_lang['simplesearch.placeholderprefix_desc'] = 'The prefix for global placeholders set by this snippet.';
$_lang['simplesearch.post'] = 'post';
$_lang['simplesearch.processtvs_desc'] = 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.';
$_lang['simplesearch.searchindex_desc'] = 'Имя параметра который будет использоваться для передачи поискового запроса.';
$_lang['simplesearch.showextract_desc'] = 'Показывать или нет фрагмент содержимого ресурса с найденным поисковым запросом в результатах поиска.';
$_lang['simplesearch.tpl_desc'] = 'Чанк, который будет использоваться как шаблон для отображения содержимого каждого отдельного результата поиска.';
$_lang['simplesearch.tpl_form_desc'] = 'Чанк, который будет использоваться как шаблон для отображения формы поиска.';
$_lang['simplesearch.toplaceholder_desc'] = 'Выводить результат работы сниппета непосредственно, или использовать для вывода подстановщик с этим именем.';
$_lang['simplesearch.useallwords_desc'] = 'Если включено, будет искать только результаты в которых есть все указанные в строке поиска слова.';
$_lang['simplesearch.searchstyle_desc'] = 'To search either with a partial LIKE search, or a relevance-based MATCH search.';
$_lang['simplesearch.andterms_desc'] = 'Whether or not to add a logical AND between words.';
$_lang['simplesearch.matchwildcard_desc'] = 'Enable wildcard search. Set to false to do exact searching on a search term.';
$_lang['simplesearch.docfields_desc'] = 'A comma-separated list of specific Resource fields to search.';