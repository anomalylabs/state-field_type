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
            'type'   => 'anomaly.field_type.country',
            'config' => [
                'country' => 'US',
                'country' => 'IL',
                'handler' => 'Anomaly\StateFieldType\StateFieldTypeOptions@handle'
            ]
        ]
    ];

### `country`

The country in which to display states for. Any existing valid 2-digit ISO country code is allowed. The default value is `'US'`.
 
Country lists are located in `state-field_type/resources/config/states/{country}.php`. 

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
