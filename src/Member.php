<?php

namespace Ipssi\Evaluation;

class Member
{
    /** @var array */
    public $listBook;

    public function __construct(array $listBook)
    {
        $this->listBook = $listBook;
    }
    public function isValidloanBook(): bool
    {
        if( sizeof($this->listBook)==0)
        return true;

        $dateNow = new \DateTime('now');
        
        if (is_array($this->listBook))
        {
            foreach($this->listBook as $book) { 
                $loanDate= $book->loanedDate;
               //difference between two dates
               $interval = $dateNow->diff($loanDate);
                $diffDays= substr($interval->format(' %a days '),1,\strpos(" ",$interval->format(' %a days ')));
                if (intval($diffDays)>15){
                    return false;
                    break;
                }
                
            }

    }
    return true;  
    }
   
    public function loanBook(Book $book)
    {
      
       if($this->isValidloanBook() && $book->isAvailableBook() ){
        array_push($this->listBook, $book);
        echo "The book"." $book->name"." added successfully. \n"; 
       }
       else{
        echo "Sorry, you can't loan " ." $book->name";
       }
       
     
    }

   
  

}
