<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Compound\MVC\Tests;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use Symfony\Component\Process\Process;

/**
 * MVCTest, integration test cases for the Model View Controller Design Pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class MVCTest extends TestCase
{
    /**
     * @var Client
     */
    private $client;

    /**
     * For auto start the PHP built-in server.
     *
     * @var Process
     */
    private static $process;

    /**
     * Test connection to the web page.
     */
    public function testConnection(): void
    {
        $response = $this->client->request('GET');
        $this->assertEquals(200, $response->getStatusCode());

        return;
    }

    /**
     * Test index page, list of all posts.
     */
    public function testIndex(): void
    {
        $response = $this->client->request('GET', '/');
        $this->assertEquals(200, $response->getStatusCode());

        $body = $response->getBody();
        $content = $body->getContents();

        /*
         * Match the title of the page.
         */
        $this->assertRegExp('/<title>MVC Design Pattern!<\/title>/', $content);

        /*
         * Match the header of the page.
         *
         * <h1>An example of the Model View Controller - Design Pattern.</h1>
         */
        $this->assertRegExp('/<h1>[a-zA-Z -.]+<\/h1>/', $content);

        /*
         * Match all cards.
         */
        $re = '/<div class="card">/';
        $matches = [];

        preg_match_all($re, $content, $matches);

        $this->assertEquals(6, count($matches[0]));

        return;
    }

    /**
     * Test show one post page.
     */
    public function testOnePost()
    {
        $response = $this->client->request('GET', '/post/0');
        $this->assertEquals(200, $response->getStatusCode());

        $body = $response->getBody();
        $content = $body->getContents();

        /*
         * Match post title.
         */
        $this->assertRegExp('/<h2>[\n a-zA-Z]+<span>/', $content);

        /*
         * Match post ID.
         */
        $re = "/(<span>[\n <]+ID:)(.)([ ]+<\/span>)/";
        $matches = [];

        preg_match_all($re, $content, $matches);

        $this->assertEquals(4, count($matches));
        $this->assertEquals(0, $matches[2][0]);

        /*
         * Match post content.
         */
        $this->assertRegExp('/<p>[\na-zA-Z ,.]+<\/p>/', $content);
    }

    /**
     * Runs always before test.
     */
    public function setUp()
    {
        $this->client = new Client(['base_uri' => 'http://127.0.0.1:8000/']);
    }

    /**
     * Runs always after test.
     */
    public function tearDown()
    {
        $this->client = null;
    }

    /**
     * Runs always before first test.
     */
    public static function setUpBeforeClass()
    {
        /*
         * First, start the PHP build-in server:
         * php -S 127.0.0.1:8000 -t PHP/Compound/MVC/Public
         */
        self::$process = new Process('php -S 127.0.0.1:8000 -t PHP/Compound/MVC/Public');
        self::$process->start();

        /*
         * Wait for server
         */
        usleep(100000);
    }

    /**
     * Runs always after last test.
     */
    public static function tearDownAfterClass()
    {
        self::$process->stop();
    }
}
