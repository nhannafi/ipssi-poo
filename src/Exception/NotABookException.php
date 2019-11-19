<?php

namespace IPSSI\Evaluation\Exception;

class NotABookException extends LibraryException
{
    private $givenData;

    public function __construct($givenData)
    {
        parent::__construct();
        $this->givenData = $givenData;
    }

    public function getGivenType() : string
    {
        return gettype($this->givenData);
    }
}
