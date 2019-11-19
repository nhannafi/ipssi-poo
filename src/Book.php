<?php

namespace Ipssi\Evaluation;

class Book 
{
        public const loaned_days = 15;
        
        /** @var int */
        private $nbr_expl;
    
        /** @var string */
        public $name;

        /** @var string*/
        public $loanedDate;

        public function __construct( string $name, int $nbr_expl,  $loanedDate)
        {
            $this->name = $name;
            $this->nbr_expl = $nbr_expl;
            $this->loanedDate = new \DateTime($loanedDate);
        }
    
        public function isAvailableBook(): bool
        {
            if ( $this->nbr_expl > 0 ) {
                return true;
                
            }
            else {
                return false;
                echo "this book is a unique exemplaire";
            }
        }

}
