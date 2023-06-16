<?php

namespace Dev\InstagramFeed\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Layout implements ArrayInterface
{
    const SLIDER = 1;
    const GRID = 2;

    public function toOptionArray()
    {
        $options = [
            [
                'value' => self::SLIDER,
                'label' => __('Slider')
            ],
            [
                'value' => self::GRID,
                'label' => __('Grid')
            ]
        ];

        return $options;
    }
}
