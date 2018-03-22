<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Proxy;

/**
 * Image.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Image implements ImageInterface
{
    /**
     * The name of the image file.
     *
     * @var string
     */
    private $filename;

    /**
     * Class constructor.
     *
     * @param string $filename The name of the image file
     */
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    /**
     * {@inheritdoc}
     */
    public function show(): string
    {
        return sprintf('The %s image is shown on the screen.', $this->filename);
    }
}
