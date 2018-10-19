<?php
/**
 * German Properties Lexicon Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language de
 */
$_lang['simplesearch.activefacet_desc'] = 'Die momentan aktive Facette. Nehmen Sie hier keine Änderung vor, wenn Sie nicht ein Suchergebnis aus einer nicht standardmäßigen, durch einen postHook generierten Facette anzeigen möchten.';
$_lang['simplesearch.containertpl_desc'] = 'Gibt den Chunk an, der die Suchergebnisse, die Seitennavigation und die Meldung, wie viele Suchergebnisse gefunden wurden, enthält.';
$_lang['simplesearch.contexts_desc'] = 'Gibt die zu durchsuchenden Kontexte an. Ist kein Kontext angegeben, wird der aktuelle Kontext verwendet.';
$_lang['simplesearch.currentpagetpl_desc'] = 'Gibt den Chunk an, der für den aktuellen Seitennavigations-Links verwendet wird.';
$_lang['simplesearch.depth_desc'] = 'Wenn "idtype" auf "Eltern" gesetzt ist, gibt "depth" an, wie viele Ebenen des Ressourcen-Baums unterhalb der angegebenen IDs durchsucht werden.';
$_lang['simplesearch.documents'] = 'Dokumente';
$_lang['simplesearch.exclude_desc'] = 'Eine kommaseparierte Liste von Ressourcen-IDs, die von der Suche ausgeschlossen werden. Beispiel: "10,15,19" bedeutet, dass bei einer Suchanfrage die Ressourcen mit den IDs "10", "15" und "19" nicht durchsucht werden.';
$_lang['simplesearch.extractellipsis_desc'] = 'Gibt die Zeichenkette an, die den Auszug eines Suchergebnisses umschließt. Standardmäßig sind dies die Auslassungspunkte.';
$_lang['simplesearch.extractlength_desc'] = 'Gibt die Anzahl der Zeichen des Inhalts-Auszugs eines Suchergebnisses an.';
$_lang['simplesearch.facetlimit_desc'] = 'Die Anzahl der Suchergebnisse aus nicht aktiven Facetten, die auf der Haupt-Suchergebnisseite angezeigt werden sollen. Der Standardwert ist 5.';  // main results page?
$_lang['simplesearch.fieldpotency_desc'] = 'Geben Sie die Gewichtung für die Reihenfolge der Suchergebnisse an. Beispiel: pagetitle:3,alias:10 vergibt 3 Punkte, wenn der gesuchte Begriff im Feld "pagetitle" gefunden wird, und 10 Punkte, wenn er im Feld "alias" gefunden wird.';
$_lang['simplesearch.get'] = 'get';
$_lang['simplesearch.hidemenu_desc'] = 'Filter zum Durchsuchen nicht in Menüs angezeigter Ressourcen. "0": Es werden nur sichtbare Ressourcen durchsucht, "1": es werden nur versteckte Ressourcen durchsucht, "2": es werden beide Arten von Ressourcen durchsucht.';
$_lang['simplesearch.hidemenu_visible'] = 'Nur sichtbare';
$_lang['simplesearch.hidemenu_hidden'] = 'Nur versteckte';
$_lang['simplesearch.hidemenu_both'] = 'Alle durchsuchen';
$_lang['simplesearch.highlightclass_desc'] = 'Gibt den Namen der CSS-Klasse an, die hervorgehobenen Begriffen in Suchergebnissen hinzugefügt wird.';
$_lang['simplesearch.highlightresults_desc'] = 'Bestimmt, ob der Suchbegriff in Suchergebnissen hervorgehoben wird.';
$_lang['simplesearch.highlighttag_desc'] = 'Gibt das HTML-Tag an, das den hervorgehobenen Suchbegriff in Suchergebnissen umschließt.';
$_lang['simplesearch.ids_desc'] = 'Eine kommaseparierte Liste von Ressourcen-IDs, auf die Suche beschränkt wird. Beispiel: "10,15,19".';
$_lang['simplesearch.idtype_desc'] = 'Gibt an, auf welche Weise sich der Parameter "ids" auswirkt. Gibt man hier "parents" ein, werden alle Unterseiten der Ressourcen durchsucht, deren IDs im Parameter "ids" angegeben werden. Gibt man hier "documents" ein, werden nur die Ressourcen mit den im Parameter "ids" angegebenen IDs durchsucht.';
$_lang['simplesearch.includetvs_desc'] = 'Gibt an, ob die Werte der Template-Variablen in den Ressourcen-Templates zur Verfügung stehen sollen. Standardwert ist "Nein".';
$_lang['simplesearch.landing_desc'] = 'Die Ressource, innerhalb derer das SimpleSearch-Snippet aufgerufen wird und die für die Anzeige der Suchergebnisse zuständig ist.';
$_lang['simplesearch.match'] = 'Match';
$_lang['simplesearch.maxwords_desc'] = 'Gibt die maximale Anzahl an Wörtern an, die bei der Suche einbezogen werden. Voraussetzung: "useAllWords" ist nicht aktiv.';
$_lang['simplesearch.method_desc'] = 'Gibt an, ob das Formular per POST oder GET versendet wird.';
$_lang['simplesearch.minchars_desc'] = 'Gibt die Mindestanzahl an Buchstaben für einen Suchbegriff an.';
$_lang['simplesearch.offsetindex_desc'] = 'Der Name des REQUEST-Parameters, der für den Seitennavigations-Offset verwendet wird.';
$_lang['simplesearch.pagelimit_desc'] = 'Die maximale Anzahl an Seiten-Links, die angezeigt werden, wenn Seitennavigations-Links dargestellt werden.';
$_lang['simplesearch.pagetpl_desc'] = 'Gibt den Chunk an, der für die Seitennavigations-Links verwendet wird.';
$_lang['simplesearch.pagefirsttpl_desc'] = 'Der Chunk, der für den Seitennavigations-Link zur ersten Ergebnisseite verwendet wird.';
$_lang['simplesearch.pagelasttpl_desc'] = 'Der Chunk, der für den Seitennavigations-Link zur letzten Ergebnisseite verwendet wird.';
$_lang['simplesearch.pageprevtpl_desc'] = 'Der Chunk, der für den Seitennavigations-Link zur vorhergehenden Ergebnisseite verwendet wird.';
$_lang['simplesearch.pagenexttpl_desc'] = 'Der Chunk, der für den Seitennavigations-Link zur nachfolgenden Ergebnisseite verwendet wird.';
$_lang['simplesearch.pagingseparator_desc'] = 'Gibt das Trennzeichen an, das die Seitennavigations-Links voneinander trennt.';
$_lang['simplesearch.parents'] = 'Eltern';
$_lang['simplesearch.partial'] = 'Partiell';
$_lang['simplesearch.perpage_desc'] = 'Gibt die maximale Anzahl der Suchergebnisse pro Seite an.';
$_lang['simplesearch.placeholderprefix_desc'] = 'Gibt das Präfix für globale Platzhalter an, die von diesem Snippet gesetzt werden.';
$_lang['simplesearch.post'] = 'post';
$_lang['simplesearch.posthooks_desc'] = 'Alle Hooks, die nach der eigentlichen Suche aufgerufen werden sollen und Facetten-Ergebnisse zu den Suchergebnissen hinzufügen können.';
$_lang['simplesearch.processtvs_desc'] = 'Gibt an, ob Template-Variablen verarbeitet werden sollen, bevor sie ausgegeben werden, wie es bei der Anzeige der Ressource der Fall wäre, die hier zusammengefasst wird. Standardwert ist "Nein"';
$_lang['simplesearch.searchindex_desc'] = 'Der Name des REQUEST-Parameters, der für die Übergabe des Suchbegriff verwendet wird.';
$_lang['simplesearch.showextract_desc'] = 'Gibt an, ob ein Auszug des Inhalts jedes Suchergebnisses angezeigt werden soll.';
$_lang['simplesearch.sortby_desc'] = 'Eine kommaseparierte Liste von Ressourcen-Feldern, nach denen die Ergebnisse sortiert werden. Lassen Sie dieses Feld leer, um nach Relevanz und Bewertung zu sortieren.';
$_lang['simplesearch.sortdir_desc'] = 'Eine kommaseparierte Liste von Ergebnis-Sortierrichtungen. Muss der Anzahl der Einträge im sortBy-Parameter entsprechen.';
$_lang['simplesearch.tpl_desc'] = 'Gibt den Chunk an, der für die Anzeige der Inhalte der einzelnen Suchergebnisse verwendet wird.';
$_lang['simplesearch.tpl_form_desc'] = 'Gibt den Chunk an, der für die Darstellung des Suchformulars verwendet wird.';
$_lang['simplesearch.toplaceholder_desc'] = 'Gibt an, ob die Ausgabe direkt oder in einem Platzhalter mit diesem Namen erfolgen soll.';
$_lang['simplesearch.useallwords_desc'] = 'Wenn "useAllWords" aktiv ist, werden nur Suchergebnisse mit der genauen Wortkombination des Suchbegriffs angezeigt.';
$_lang['simplesearch.searchstyle_desc'] = 'Gibt an, ob entweder mit einer partiellen LIKE-Suche oder einer Relevanz-basierten MATCH-Suche gesucht wird (siehe MySQL-Manual).';
$_lang['simplesearch.andterms_desc'] = 'Gibt an, ob ein logisches UND zwischen den Suchworten eingefügt werden soll oder nicht. Wird hier "Ja" gewählt, werden nur Ressourcen gefunden, in denen alle gesuchten Begriffe vorkommen.';
$_lang['simplesearch.matchwildcard_desc'] = 'Wählen Sie hier "Ja", wird eine Platzhalter-Suche (Wildcard-Suche) durchgeführt. Wählen Sie "Nein", wird nach dem genauen Suchbegriff gesucht.';
$_lang['simplesearch.docfields_desc'] = 'Eine kommaseparierte Liste von Ressourcen-Feldern, die durchsucht werden sollen. Beispiel: "pagetitle,longtitle,description".';
$_lang['simplesearch.urlscheme_desc'] = 'Das von Ihnen gewünschte URL-Schema: http, https, full, abs, relative, etc. Siehe die Dokumentation zu $modx->makeUrl(). Diese Einstellung wird verwendet, wenn die Seitennavigations-Links generiert werden.';
$_lang['simplesearch.url_relative'] = 'Relativ';
$_lang['simplesearch.url_absolute'] = 'Absolut';
$_lang['simplesearch.url_full'] = 'Vollständig (full)';
$_lang['simplesearch.ascending'] = 'Aufsteigend';
$_lang['simplesearch.descending'] = 'Absteigend';