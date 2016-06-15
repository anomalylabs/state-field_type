<?php

return [
    'countries' => [
        'type'   => 'anomaly.field_type.checkboxes',
        'config' => [
            'default_value' => [
                'US'
            ],
            'handler'       => 'countries',
            'mode'          => 'tags',
        ]
    ]
];
