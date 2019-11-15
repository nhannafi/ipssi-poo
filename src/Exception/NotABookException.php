<?php

namespace IPSSI\Evaluation\Exception;

class NotABookException extends LibraryException
{
    private $givenData;

    public function __construct($givenData)
    {
        $this->givenData = $givenData;
    }

    public function getGivenType() : string
    {
        return gettype($this->givenData);
    }
}
