<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\Builder;

use PHP\Creation\Builder\Element\Content;
use PHP\Creation\Builder\Element\Footer;
use PHP\Creation\Builder\Element\Header;
use PHP\Creation\Builder\Page\PageBuilder;
use PHP\Creation\Builder\Page\PageBuilderInterface;

/**
 * MainPageBuilder.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class MainPageBuilder extends PageBuilder
{
    /**
     * {@inheritdoc}
     */
    public function setHeading(): PageBuilderInterface
    {
        $header = new Header();

        $header->setStartTag('<header>')
            ->setContent('Builder')
            ->setEndTag('</header>');

        $this->page->addElement($header);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setContent(): PageBuilderInterface
    {
        $paragraph = new Content();
        $paragraph->setStartTag('<p>')
            ->setContent('Lorem ipsum.')
            ->setEndTag('</p>');

        $paragraph2 = new Content();
        $paragraph2->setStartTag('<p>')
            ->setContent('Donec ut vehicula nisl.')
            ->setEndTag('</p>');

        $this->page
            ->addElement($paragraph)
            ->addElement($paragraph2);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFooter(): PageBuilderInterface
    {
        $footer = new Footer();

        $footer->setStartTag('<footer>')
            ->setContent('(c) 2018')
            ->setEndTag('</footer>');

        $this->page->addElement($footer);

        return $this;
    }
}
