<?php

namespace Dev\InstagramFeed\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Status implements ArrayInterface
{
    const ENABLE = 1;
    const DISABLE = 0;

    public function toOptionArray()
    {
        $options = [
            [
                'value' => self::ENABLE,
                'label' => __('Enable')
            ],
            [
                'value' => self::DISABLE,
                'label' => __('Disable')
            ]
        ];

        return $options;
    }
}
