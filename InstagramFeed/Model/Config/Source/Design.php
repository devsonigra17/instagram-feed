<?php

namespace Dev\InstagramFeed\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Design implements ArrayInterface
{
    const CONFIG = 1;
    const CUSTOM = 2;

    public function toOptionArray()
    {
        $options = [
            [
                'value' => self::CONFIG,
                'label' => __('Use Config')
            ],
            [
                'value' => self::CUSTOM,
                'label' => __('Custom')
            ]
        ];

        return $options;
    }
}
