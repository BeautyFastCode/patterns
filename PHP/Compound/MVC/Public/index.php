<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHP\Compound\MVC\Controller\Router;

/*
 * Composer
 */
require __DIR__ . '/../../../vendor/autoload.php';

/**
 * The main entrance to this Model View Controller (MVC) example.
 *
 * First, start the PHP build-in server:
 * php -S 127.0.0.1:8000 -t PHP/Compound/MVC/Public
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */

$router = new Router();

$router->add([
    'uri' => '/',
    'action' => 'list',
]);
$router->add([
    'uri' => '/post/0',
    'action' => 'read',
]);

$router->dispatch($_SERVER['REQUEST_URI']);
