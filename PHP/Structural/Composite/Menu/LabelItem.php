<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Composite\Menu;

/**
 * LabelItem.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class LabelItem extends BaseMenuItem
{
    /**
     * {@inheritdoc}
     */
    public function renderItem(): array
    {
        return [PropertyType::LABEL => strtoupper($this->getLabel())];
    }
}
