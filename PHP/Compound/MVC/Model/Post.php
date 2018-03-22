<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Compound\MVC\Model;

/**
 * The Post entity.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Post
{
    /**
     * The ID of the Post.
     *
     * @var int
     */
    private $id;

    /**
     * The title of the Post.
     *
     * @var string
     */
    private $title;

    /**
     * The content of the Post.
     *
     * @var string
     */
    private $content;

    /**
     * Returns the ID.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets the ID.
     *
     * @param int $id
     *
     * @return Post
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Returns the Post title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the Post title.
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Returns the Post content.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the Post content.
     *
     * @param string $content
     *
     * @return Post
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Returns the Post in an array format, ID is automatically generated by the database.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => null,
            'title' => $this->getTitle(),
            'content' => $this->getContent(),
        ];
    }

    /**
     * Sets the properties of the post from the array.
     *
     * @param array $data
     *
     * @return Post
     */
    public function fromArray(array $data): self
    {
        return $this->setId($data['id'])
            ->setTitle($data['title'])
            ->setContent($data['content']);
    }
}
