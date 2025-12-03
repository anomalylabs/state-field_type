# State Field Type

*anomaly.field_type.state*

#### A state dropdown field type.

The state field type provides a dropdown input for selecting US states with built-in validation.

## Features

- Complete list of US states
- State abbreviation and full name support
- Custom option handlers for filtering
- Built-in state validation
- Support for search and dropdown modes
- Configurable display format
- Database storage optimization

## Configuration

### Basic Configuration

```php
protected $fields = [
    'state' => [
        'type' => 'anomaly.field_type.state'
    ]
];
```

### With Search Mode

```php
'state' => [
    'type'   => 'anomaly.field_type.state',
    'config' => [
        'mode' => 'search'
    ]
]
```

### With Default Value

```php
'state' => [
    'type'    => 'anomaly.field_type.state',
    'config'  => [
        'default_value' => 'CA'
    ]
]
```

## Usage Examples

### Basic State Selection

```php
$stream->create([
    'state' => 'NY'
]);
```

### With Additional Validation

```php
protected $fields = [
    'billing_state' => [
        'type'  => 'anomaly.field_type.state',
        'rules' => [
            'required'
        ]
    ]
];
```

## Accessing Values

### In Twig Templates

```twig
{# Display state abbreviation #}
{{ entry.state }}

{# Get state name #}
{{ entry.state_name }}

{# Check specific state #}
{% if entry.state == 'CA' %}
    <p>California resident</p>
{% endif %}
```

### In PHP

```php
$entry = $model->find(1);

// Get state abbreviation
$state = $entry->state;

// Get full state name
$stateName = $entry->getFieldType('state')->getStateName();

// Validate state
if (in_array($entry->state, ['CA', 'NY', 'TX'])) {
    // Handle specific states
}
```

## Setting Values

### In Forms

```php
$form = $builder->make('example.module.test');
$form->on('saving', function(FormBuilder $builder) {
    $entry = $builder->getFormEntry();
    $entry->state = 'FL';
});
```

### Direct Assignment

```php
$entry->state = 'TX';
$entry->save();
```

## Database Structure

The state field type stores state data as:
- **VARCHAR(2)** - Two-letter state abbreviation (e.g., "CA", "NY")

## Validation

### Required State

```php
'state' => [
    'type'  => 'anomaly.field_type.state',
    'rules' => [
        'required'
    ]
]
```

### State In List

```php
'state' => [
    'type'  => 'anomaly.field_type.state',
    'rules' => [
        'required',
        'in:CA,NY,TX,FL'
    ]
]
```

## Common Use Cases

### Billing Address State

```php
'billing_state' => [
    'type'   => 'anomaly.field_type.state',
    'config' => [
        'mode' => 'search'
    ],
    'rules' => [
        'required'
    ]
]
```

### Shipping Address State

```php
'shipping_state' => [
    'type'   => 'anomaly.field_type.state',
    'config' => [
        'mode' => 'search'
    ],
    'rules' => [
        'required'
    ]
]
```

### Store Location State

```php
'location_state' => [
    'type'  => 'anomaly.field_type.state',
    'rules' => [
        'required'
    ]
]
```

### User Profile State

```php
'home_state' => [
    'type'   => 'anomaly.field_type.state',
    'config' => [
        'mode' => 'search'
    ]
]
```

## Available States

The field type includes all 50 US states plus DC:

- Alabama (AL)
- Alaska (AK)
- Arizona (AZ)
- Arkansas (AR)
- California (CA)
- Colorado (CO)
- Connecticut (CT)
- Delaware (DE)
- District of Columbia (DC)
- Florida (FL)
- Georgia (GA)
- Hawaii (HI)
- Idaho (ID)
- Illinois (IL)
- Indiana (IN)
- Iowa (IA)
- Kansas (KS)
- Kentucky (KY)
- Louisiana (LA)
- Maine (ME)
- Maryland (MD)
- Massachusetts (MA)
- Michigan (MI)
- Minnesota (MN)
- Mississippi (MS)
- Missouri (MO)
- Montana (MT)
- Nebraska (NE)
- Nevada (NV)
- New Hampshire (NH)
- New Jersey (NJ)
- New Mexico (NM)
- New York (NY)
- North Carolina (NC)
- North Dakota (ND)
- Ohio (OH)
- Oklahoma (OK)
- Oregon (OR)
- Pennsylvania (PA)
- Rhode Island (RI)
- South Carolina (SC)
- South Dakota (SD)
- Tennessee (TN)
- Texas (TX)
- Utah (UT)
- Vermont (VT)
- Virginia (VA)
- Washington (WA)
- West Virginia (WV)
- Wisconsin (WI)
- Wyoming (WY)

## Best Practices

1. **Use Search Mode**: For better UX with 50+ options, enable search mode
2. **Store Abbreviations**: Store 2-letter codes for consistency and data integrity
3. **Display Full Names**: Show full state names in user-facing displays
4. **Validate Format**: Ensure stored values are uppercase 2-letter codes
5. **Consider Territories**: If needed, extend to include US territories
6. **International**: For international addresses, use country-specific region field types
7. **Indexing**: Index state columns for location-based queries

## Requirements

- Streams Platform ^1.10
- PyroCMS 3.10+

## License

The State Field Type is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Authors

PyroCMS, Inc. - [https://pyrocms.com](https://pyrocms.com)
Ryan Thompson - [support@pyrocms.com](mailto:support@pyrocms.com)
