<form class="simplesearch-search-form" action="[[~[[+landing]]]]" method="[[+method]]">
    <fieldset>
        <label for="[[+searchIndex]]">[[%simplesearch.search? &namespace=`simplesearch` &topic=`default`]]</label>

        <input type="text" name="[[+searchIndex]]" id="[[+searchIndex]]" value="[[+searchValue]]" />
        <input type="hidden" name="id" value="[[+landing]]" />

        <input type="submit" value="[[%simplesearch.search? &namespace=`simplesearch` &topic=`default`]]" />
    </fieldset>
</form>
