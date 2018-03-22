<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Compound\MVC\Controller;

use PHP\Compound\MVC\Model\PostFixtures;
use PHP\Compound\MVC\Model\PostRepository;
use PHP\Compound\MVC\View\View;

/**
 * Controller.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Controller
{
    /**
     * The Post repository.
     *
     * @var PostRepository
     */
    private $postRepository;

    /**
     * The List action, show all the Posts.
     *
     * Route "/"
     */
    public function list()
    {
        $posts = $this->getRepository()
            ->findAll();

        return View::render('list.php', ['posts' => $posts]);
    }

    /**
     * The Read action, show only one Post.
     *
     * Route "/post/{id}"
     *
     * @param int $id
     *
     * @return string
     */
    public function read(int $id)
    {
        $post = $this->getRepository()
            ->findById($id);

        return View::render('post.php', ['post' => $post]);
    }

    /**
     * Returns the instance of the PostRepository and load fixtures.
     *
     * @return PostRepository
     */
    private function getRepository(): PostRepository
    {
        if (null === $this->postRepository) {
            $this->postRepository = new PostRepository();
            PostFixtures::loadFixtures($this->postRepository);
        }

        return $this->postRepository;
    }
}
