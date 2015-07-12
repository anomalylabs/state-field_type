<?php namespace Anomaly\StateFieldType;

use Illuminate\Config\Repository;

/**
 * Class StateFieldTypeOptions
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\StateFieldType
 */
class StateFieldTypeOptions
{

    /**
     * Handle the options.
     *
     * @param StateFieldType $fieldType
     * @param Repository     $config
     */
    public function handle(StateFieldType $fieldType, Repository $config)
    {
        $fieldType->setOptions(
            $config->get('anomaly.field_type.state::states/' . array_get($fieldType->getConfig(), 'country'))
        );
    }
}
