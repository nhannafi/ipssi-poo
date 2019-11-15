<?php

namespace Ipssi\Evaluation;

class Book 
{
        /** @var int */
        private $loaned_days;
        
        /** @var int */
        private $nbr_expl;
    
        /** @var bool */
        private $loaned;
    
        /** @var string */
        private $name;
        

        public function __construct( string $name, int $nbr_expl,  int $loaned_days)
        {
            $this->name = $name;
            $this->nbr_expl = $nbr_expl;
            $this->loaned_days = $loaned_days;
            $this->loaned = false;
        }
    
        public function loanIfSuitable(string $name, int $nbr_expl,  int $loaned_day): ?int
        {
            if ($this->loaned && $this->nbr_expl = 0 ) {
                return null;
            }
    
            if ($this->name === $name   &&  $this->loaned_days < 15) {
                $this->loaned = true;
                return $this->name;
            }
    
            return null;
        }

}
