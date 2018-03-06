<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Compound\MVC\Model;

/**
 * PostFixtures
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class PostFixtures
{
    /**
     * Loads sample data to the data storage.
     *
     * @param PostRepository $postRepository The Post Repository
     *
     * @return array Returns the loaded posts ID
     */
    public static function loadFixtures(PostRepository $postRepository):array
    {
        $ids = [];
        $amountOfPosts = 5;
        $loremIpsum = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'Nunc massa orci, tristique sed libero at.',
            'Donec vulputate accumsan vestibulum.',
            'Aliquam eu velit eget massa blandit aliquam.',
            'Proin lobortis nisl ac purus fringilla facilisis.',
        ];

        for ($i = 0; $i < $amountOfPosts; $i++) {

            $post = new Post();

            $post->setId($i)
                ->setTitle(substr($loremIpsum[$i], 0, 15))
                ->setContent($loremIpsum[$i]);

            $ids[] = $postRepository->add($post);
        }

        return $ids;
    }
}
