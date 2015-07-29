# Configuration

**Example Definition:**

```
protected $fields = [
    'example' => [
        'type'   => 'anomaly.field_type.country',
        'config' => [
            'country' => 'US'
        ]
    ]
];
```

### `country`

The country in which to display states for. Any existing valid 2-digit ISO country code is allowed. The default value is `'US'`.
 
Country lists are located in `resources/config/states/{code}.php`. 

If your country is not yet supported please submit a pull request to add it!