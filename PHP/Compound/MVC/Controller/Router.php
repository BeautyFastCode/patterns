<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Compound\MVC\Controller;

/**
 * Router - The class responsible for the URL address parsing.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Router
{
    /**
     * Array for the Routes.
     *
     * @var array
     */
    private $routes;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->routes = [];
    }

    /**
     * Add route to the routes array.
     *
     * @param array $route
     */
    public function add(array $route): void
    {
        $this->routes[] = $route;

        return;
    }

    /**
     * Compares requested URI with the routes array.
     *
     * @param string $request_uri The requested URI
     */
    public function dispatch(string $request_uri): void
    {
        foreach ($this->routes as $route) {

            if ($route['uri'] === '/') {

                $controller = new Controller();

                $controller->read(0);
            }
//            if ($route['uri'] === $request_uri) {
//                return 'ok';
//            }
        }
        // nothing to match, return not found
//        throw new \Exception('No route matched.', 404);
//        return '404 No route matched.';

        return;
    }
}
