<?php

namespace Ipssi\Evaluation;

class Member
{ 
    /** @var string */
    private $claimedBookName;

    /** @var int */
    private $bookName;

    public function __construct(string $claimedBookName)
    {
        $this->claimedBookName = $claimedBookName;
    }

    public function orderBookTo(Library $library)
    {
        $library->provideBookTo($this, $this->claimedBookName );
    }

    public function setBookName(int $bookName): self
    {
        $this->bookName = $bookName;

        return $this;
    }

    public function doYouHaveABook(): string
    {
        if (null === $this->bookName) {
            return "No, I must claim a book somewhere";
        }

        return "Yes, I have the book name " . $this->bookName;
    }

}
