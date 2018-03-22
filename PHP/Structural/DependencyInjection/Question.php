<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\DependencyInjection;

/**
 * Question.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Question
{
    /**
     * The author of the question.
     *
     * @var Author
     */
    private $author;

    /**
     * The question.
     *
     * @var string
     */
    private $question;

    /**
     * Dependency Inject the Author to the Question.
     *
     * @param string $question The question
     * @param Author $author   The author of the question
     */
    public function __construct(string $question, Author $author)
    {
        $this
            ->setQuestion($question)
            ->setAuthor($author);
    }

    /**
     * Set the author of the question.
     *
     * @param Author $author
     *
     * @return Question
     */
    public function setAuthor(Author $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Returns the author of the question.
     *
     * @return Author
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }

    /**
     * Set the question.
     *
     * @param string $question
     *
     * @return Question
     */
    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Returns the question.
     *
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }
}
