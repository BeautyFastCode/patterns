<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\UnitOfWork\Entity;

/**
 * The Post entity.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Post implements EntityInterface
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
     * {@inheritdoc}
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId(int $id): EntityInterface
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
     * Returns the Post in an array format.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
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
