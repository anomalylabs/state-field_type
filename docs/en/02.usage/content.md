## Usage[](#usage)

This section will show you how to use the field type via API and in the view layer.


### Setting Values[](#usage/setting-values)

You must set the country field type value with a valid ISO-2 state code from the available options.

    $entry->example = "IL";

<div class="alert alert-info">**Note:** The value is case **insensitive** and is uppercased when set.</div>


### Basic Output[](#usage/basic-output)

The state field type returns `null` or the selected ISO-2 state code.

    $entry->example; // IL


### Presenter Output[](#usage/presenter-output)

This section will show you how to use the decorated value provided by the `\Anomaly\StateFieldType\StateFieldTypePresenter` class.


#### StateFieldTypePresenter::code()[](#usage/presenter-output/statefieldtypepresenter-code)

The `code` method returns the selected state's ISO code.

###### Returns: `string`

###### Example

    $decorated->example->code();

###### Twig

    {{ decorated.example.code() }}


#### StateFieldTypePresenter::name()[](#usage/presenter-output/statefieldtypepresenter-name)

The `name` method returns the name of the selected state.

###### Returns: `string`

###### Example

    $decorated->example->name();

###### Twig

    {{ decorated.example.name() }}
