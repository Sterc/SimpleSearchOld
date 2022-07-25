# MODX SimpleSearch
![SimpleSearch version](https://img.shields.io/badge/version-3.0.0-blue.svg) ![MODX version requirements](https://img.shields.io/badge/modx%20version%20requirement-3.0%2B-brightgreen.svg)

## Installation
Simply install it through the top menu ```Extras > Installer``` and search for ```SimpleSearch```. Install it from there. After installing it, it is recommended to clear your MODX cache, through the top menu ```Manage > Clear Cache```.

## Upgrade risks
This is currently alpha software and is only compatible with MODX 3.x and higher. This has been tested on basic search queries, but you may encounter problems with more advanced setups. 

## Autosuggest
A processor has been provided for retrieving a list of search suggestions based on a Template Variable containing a comma delimited list of search terms. 
You can configure the TV to use by setting `simplesearch.autosuggest_tv`, which can either be the TV name or id.

You can use the example (requires jQuery) code below for retrieving a list of search suggestions.

```javascript
$('.simplesearch-search-form input[type="text"]').on('keyup', function () {
    var value = $(this).val();

    $.ajax({
        url         : '/assets/components/simplesearch/connector.php?action=web/autosuggestions&search=' + value,
        dataType    : 'JSON',
        complete    : function (result) {
            console.log(result.results);
        }
    });
});
```

## Bugs and feature requests
We value your feedback, feature requests and bug reports. Please issue them on [Github](https://github.com/modxcms/SimpleSearch/issues/new)..

Need help? [Contact MODX Help Desk](mailto:help@modx.com)
