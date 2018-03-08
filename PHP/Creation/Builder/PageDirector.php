<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\Builder;

use PHP\Creation\Builder\Page\PageBuilderInterface;

/**
 * PageDirector
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class PageDirector
{
    /**
     * Build and return the Page in string format.
     *
     * @param PageBuilderInterface $pageBuilder
     * @return string
     */
    public function buildPage(PageBuilderInterface $pageBuilder): string
    {
        $pageBuilder
            ->setHeading()
            ->setContent()
            ->setFooter();

        return $pageBuilder->getPage();
    }
}
