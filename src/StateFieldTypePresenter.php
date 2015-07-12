<?php namespace Anomaly\StateFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class StateFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\StateFieldType
 */
class StateFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The decorated object.
     * This is for IDE support.
     *
     * @var StateFieldType
     */
    protected $object;

    /**
     * Return the state's name.
     *
     * @return null|string
     */
    public function name()
    {
        if (!$iso = $this->object->getValue()) {
            return null;
        }

        return array_get($this->object->getOptions(), $iso);
    }
}
