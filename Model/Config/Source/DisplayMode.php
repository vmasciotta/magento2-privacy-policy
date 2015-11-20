<?php

namespace Vmasciotta\PrivacyPolicy\Model\Config\Source;

class DisplayMode implements \Magento\Framework\Option\ArrayInterface
{
    const CHECKBOX_ONLY = 0;
    const CHECKBOX_AND_TEXTAREA = 1;

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [
            ['value'=>self::CHECKBOX_ONLY,'label'=>__('Checkbox Only')],
            ['value'=>self::CHECKBOX_AND_TEXTAREA,'label'=>__('Checkbox and TextArea')]
        ];
    }
}