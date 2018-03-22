<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\Builder\Page;

use PHP\Creation\Builder\Element\Element;

/**
 * PageBuilder.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class PageBuilder implements PageBuilderInterface
{
    /**
     * The Page to build.
     *
     * @var Page
     */
    protected $page;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->page = new Page();
    }

    /**
     * {@inheritdoc}
     */
    public function getPage(): string
    {
        $htmlPage = '';

        foreach ($this->page->getElements() as $element) {
            /** @var Element $element */
            if ($element instanceof Element) {
                $htmlPage = sprintf('%s%s%s%s',
                    $htmlPage,
                    $element->getStartTag(),
                    $element->getContent(),
                    $element->getEndTag()
                );
            }
        }

        return $htmlPage;
    }
}
