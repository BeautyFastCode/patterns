<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Compound\MVC\View;

/**
 * View.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class View
{
    /**
     * Render the view in HTML format.
     *
     * @param string $view The view name
     * @param array  $args The view data
     */
    public static function render(string $view, $args = []): void
    {
        /*
         * Import variables into the current symbol table from an $args,
         * now they are available in the View
         */
        extract($args, EXTR_SKIP);

        /*
         * Include template
         */
        $template = dirname(__DIR__)."/Template/$view";

        if (is_readable($template)) {
            include $template;
        }

        return;
    }
}
