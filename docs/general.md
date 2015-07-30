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
                'country' => 'US'
            ]
        ]
    ];

### `country`

The country in which to display states for. Any existing valid 2-digit ISO country code is allowed. The default value is `'US'`.
 
Country lists are located in `state-field_type/resources/config/states/{country}.php`. 

If your country is not yet supported please submit a pull request to add it!


<a name="output"></a>
## Output

This field type returns the selected 2-digit ISO state code by default.

### `name()`

Returns the state's name.

    // Twig usage
    {{ entry.example.name }}
    
    // API usage
    $entry->example->name();
