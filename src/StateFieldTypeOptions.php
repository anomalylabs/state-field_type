<?php namespace Anomaly\StateFieldType;

use Illuminate\Config\Repository;

/**
 * Class StateFieldTypeOptions
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
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
