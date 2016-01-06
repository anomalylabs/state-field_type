<?php

return [
    'country'     => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'top_options' => [
                'US'
            ],
            'options'     => function (
                \Anomaly\StateFieldType\StateFieldType $fieldType,
                \Illuminate\Filesystem\Filesystem $files
            ) {
                $options = [];

                foreach ($files->files($fieldType->getPath('resources/config/states')) as $path) {
                    $options[basename($path, '.php')] = trans(
                        'anomaly.field_type.country::country.' . basename($path, '.php')
                    );
                }

                return $options;
            }
        ]
    ],
    'top_options' => [
        'type' => 'anomaly.field_type.textarea'
    ]
];
