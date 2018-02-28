<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Proxy;

/**
 * ImageInterface
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface ImageInterface
{
    /**
     * Show the image on the screen.
     *
     * @return string
     */
    public function show(): string;
}
