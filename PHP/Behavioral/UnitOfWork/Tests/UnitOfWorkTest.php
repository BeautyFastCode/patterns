<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\UnitOfWork\Tests;

use PHP\Behavioral\UnitOfWork\Entity\Post;
use PHP\Behavioral\UnitOfWork\Persistence\EntityManager;
use PHPUnit\Framework\TestCase;

/**
 * Test case for Unit Of Work design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class UnitOfWorkTest extends TestCase
{
    /**
     * Tests add new posts.
     */
    public function testAdd(): void
    {
        $postA = new Post();
        $postA->setId(0)
            ->setTitle('Post A')
            ->setContent('Lorem ipsum dolor.');

        $postB = new Post();
        $postB->setId(1)
            ->setTitle('Post B')
            ->setContent('Nunc massa orci.');

        $entityManager = new EntityManager();
        $entityManager
            ->persist($postA)
            ->persist($postB);

        $this->assertEquals(2, $entityManager->countToFlush());
        $entityManager->flush();

        $repository = $entityManager->getRepository(Post::class);
        $this->assertEquals(2, count($repository->findAll()));

        return;
    }

    /**
     * Tests add and update posts.
     */
    public function testAddAndUpdate(): void
    {
        /*
         * Add sample posts.
         */
        $postA = new Post();
        $postA->setId(0)
            ->setTitle('Post A')
            ->setContent('Lorem ipsum dolor.');

        $postB = new Post();
        $postB->setId(1)
            ->setTitle('Post B')
            ->setContent('Nunc massa orci.');

        $entityManager = new EntityManager();
        $entityManager
            ->persist($postA)
            ->persist($postB);

        $entityManager->flush();

        /*
         * Find post in repository.
         */
        $repository = $entityManager->getRepository(Post::class);
        $this->assertEquals(2, count($repository->findAll()));

        $postC = $repository->findById(0);
        $this->assertEquals('Post A', $postC->getTitle());

        /*
         * Update.
         */
        $postC->setTitle('Updated Post C');

        $entityManager->persist($postC);
        $entityManager->flush();

        /*
         * Check if was updated.
         */
        $postD = $repository->findById(0);
        $this->assertEquals('Updated Post C', $postD->getTitle());

        return;
    }
}
