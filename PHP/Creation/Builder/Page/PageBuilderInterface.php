<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\Builder\Page;

/**
 * PageBuilderInterface.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface PageBuilderInterface
{
    /**
     * Build the heading.
     *
     * @return PageBuilderInterface
     */
    public function setHeading(): self;

    /**
     * Build the content.
     *
     * @return PageBuilderInterface
     */
    public function setContent(): self;

    /**
     * Build the footer.
     *
     * @return PageBuilderInterface
     */
    public function setFooter(): self;

    /**
     * Build and return page in string format.
     *
     * @return string
     */
    public function getPage(): string;
}
