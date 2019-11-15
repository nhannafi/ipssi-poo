<?php

namespace Ipssi\Evaluation;

class Library
{
    private $books;

    public function __construct(array $books)
    {
        foreach ($books as $book) {
            if (false === $book instanceof Book) {
                throw new NotABookException($book);
            }
        }

        $this->books = $books;
    }

    public function provideBookTo(Member $member, int $nbr_expl)
    {
        foreach ($this->books as $book) {
            /** @var Book $book */
            $book = $book->loanIfSuitable($name, $nbr_expl);

            if ($name !== null) {
                $member->setBookName($bookName);
                break;
            }
        }
    }
}
