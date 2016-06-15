# State Field Type

- [Introduction](#introduction)
- [Configuration](#configuration)
- [Output](#output)


<a name="introduction"></a>
## Introduction

`anomaly.field_type.state`

The state field type provides a list of states in an HTML select input.


<a name="configuration"></a>
## Configuration

**Example Definition:**

    protected $fields = [
        'example' => [
            'type'   => 'anomaly.field_type.state',
            'config' => [
                'countries'     => ['US'],
                'default_value' => 'IL',
                'handler'       => 'Anomaly\StateFieldType\StateFieldTypeOptions@handle'
            ]
        ]
    ];

### `countries`

The countries in which to display states for. Any existing valid 2-digit ISO country codes are allowed. The default value is `null` (all countries).
 
Country lists are located in `/vendor/anomaly/streams-platform/resources/config/states/{country}.php`.

If your country is not yet supported please submit a pull request to add it!

### `default_value`

The default selection. Any valid 2-digit ISO state code can be used. By default value is `null`.

### `handler`

The options handler callable string. Any valid callable class string can be used. The default value is `'Anomaly\StateFieldType\StateFieldTypeOptions@handle'`.

The handler is responsible for setting the available options on the field type instance.

**NOTE:** This option can not be set through the GUI configuration.


<a name="output"></a>
## Output

This field type returns the selected 2-digit ISO state code by default.

### `name()`

Returns the state's name.

    // Twig usage
    {{ entry.example.name }}
    
    // API usage
    $entry->example->name();
