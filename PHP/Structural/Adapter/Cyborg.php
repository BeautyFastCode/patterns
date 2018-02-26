<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Adapter;

/**
 * Cyborg.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Cyborg implements CyborgInterface
{
    /**
     * {@inheritdoc}
     */
    public function move(): string
    {
        return sprintf('Cyborg moves.');
    }

    /**
     * {@inheritdoc}
     */
    public function says(): string
    {
        return sprintf('I\'m the Cyborg.');
    }
}
