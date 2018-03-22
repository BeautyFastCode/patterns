<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\UnitOfWork\Tests;

use PHP\Behavioral\UnitOfWork\Database\PostFixtures;
use PHP\Behavioral\UnitOfWork\Entity\Post;
use PHP\Behavioral\UnitOfWork\Repository\PostRepository;
use PHPUnit\Framework\TestCase;

/**
 * Tests cases for Repository Design Pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class PostRepositoryTest extends TestCase
{
    /**
     * Test load fixtures and test find one or all the Posts.
     */
    public function testLoadFixturesAndFind(): void
    {
        /*
         * Load fixtures
         */
        $repository = new PostRepository();

        $this->assertEquals(6, count(PostFixtures::loadFixtures($repository)));
        $this->assertInstanceOf(Post::class, $repository->findById(0));

        /*
         * Find One
         */
        /** @var Post $post */
        $post = $repository->findById(3);

        $this->assertEquals(3, $post->getId());
        $this->assertEquals('Aliquam eu veli', $post->getTitle());
        $this->assertEquals(
            'Aliquam eu velit eget massa blandit aliquam.',
            $post->getContent()
        );

        /*
         * Find All
         */
        $posts = $repository->findAll();
        $this->assertEquals(6, count($posts));

        /** @var Post $postB */
        $postB = $posts[3];
        $this->assertInstanceOf(Post::class, $postB);

        $this->assertEquals(3, $postB->getId());
        $this->assertEquals('Aliquam eu veli', $postB->getTitle());
        $this->assertEquals(
            'Aliquam eu velit eget massa blandit aliquam.',
            $postB->getContent()
        );

        return;
    }

    /**
     * Test adding the Post.
     */
    public function testAddPost(): void
    {
        $repository = new PostRepository();
        $this->assertEquals(0, count($repository->findAll()));

        /*
         * Add first Post.
         */
        $post = new Post();
        $post->setTitle('The Post.')
            ->setContent('Aliquam eu velit eget massa blandit aliquam.');

        $this->assertEquals(0, $repository->add($post));
        $this->assertEquals(1, count($repository->findAll()));

        /*
         * Add second Post.
         */
        $postB = new Post();
        $postB->setTitle('The Post B.')
            ->setContent('Nunc massa orci, tristique sed libero at.');

        $this->assertEquals(1, $repository->add($postB));
        $this->assertEquals(2, count($repository->findAll()));

        /*
         * Find that Post.
         */
        /** @var Post $postC */
        $postC = $repository->findById(1);

        $this->assertEquals(1, $postC->getId());
        $this->assertEquals('The Post B.', $postC->getTitle());
        $this->assertEquals(
            'Nunc massa orci, tristique sed libero at.',
            $postC->getContent()
        );

        return;
    }

    /**
     * Test deleting the Post.
     */
    public function testDeletePost(): void
    {
        $repository = new PostRepository();
        PostFixtures::loadFixtures($repository);

        $posts = $repository->findAll();
        $this->assertEquals(6, count($posts));

        /*
         * Remove some posts.
         */
        $repository->remove($posts[3]);
        $this->assertEquals(5, count($repository->findAll()));

        $repository->remove($posts[1]);
        $this->assertEquals(4, count($repository->findAll()));

        return;
    }
}
