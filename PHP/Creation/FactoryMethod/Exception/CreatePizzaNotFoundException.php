<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\FactoryMethod\Exception;

use Exception;

/**
 * An exception used when there is no such type of pizza.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class CreatePizzaNotFoundException extends Exception
{
    /**
     * Class constructor
     *
     * @param string $pizzaName The Pizza name
     */
    public function __construct(string $pizzaName)
    {
        $message = sprintf('I don\'t have \'%s\' type Pizza in an offer.', $pizzaName);
        parent::__construct($message);
    }
}
