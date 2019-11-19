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

    
}
