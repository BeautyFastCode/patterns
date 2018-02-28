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
 * ProxyImage
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class ProxyImage implements ImageInterface
{
    /**
     * The name of the image file.
     *
     * @var string
     */
    private $filename;

    /**
     * The Image object.
     *
     * @var Image
     */
    private $image;

    /**
     * Class constructor
     *
     * @param string $filename The name of the image file
     */
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    /**
     * Lazy Loads the image.
     *
     * {@inheritdoc}
     */
    public function show(): string
    {
        if (null === $this->image) {
            $this->createObject();

            return sprintf('Lazy Loading the %s ...', $this->filename);
        }

        return $this->image->show();
    }

    /**
     * Creates the image object.
     */
    private function createObject(): void
    {
        $this->image = new Image($this->filename);

        return;
    }
}
