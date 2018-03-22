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
 * MenuItem.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class MenuItem extends BaseMenuItem
{
    /**
     * The URL of the menu item.
     *
     * @var string
     */
    private $url;

    /**
     * {@inheritdoc}
     */
    public function __construct(string $name, string $url)
    {
        parent::__construct($name);

        $this->url = $url;
    }

    /**
     * {@inheritdoc}
     */
    public function renderItem(): array
    {
        return [
            PropertyType::LABEL => $this->getLabel(),
            PropertyType::URL => $this->getUrl(),
        ];
    }

    /**
     * Returns the URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
