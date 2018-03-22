<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\Builder;

use PHP\Creation\Builder\Element\Footer;
use PHP\Creation\Builder\Element\Header;
use PHP\Creation\Builder\Page\PageBuilder;
use PHP\Creation\Builder\Page\PageBuilderInterface;

/**
 * ArticlePageBuilder.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class ArticlePageBuilder extends PageBuilder
{
    /**
     * {@inheritdoc}
     */
    public function setHeading(): PageBuilderInterface
    {
        $header = new Header();

        $header->setStartTag('<article>')
            ->setContent('Article Page');

        $this->page->addElement($header);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setContent(): PageBuilderInterface
    {
        // Nothing to do.

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFooter(): PageBuilderInterface
    {
        $footer = new Footer();

        $footer->setEndTag('</article>');

        $this->page->addElement($footer);

        return $this;
    }
}
