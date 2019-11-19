<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Member;
use Ipssi\Evaluation\Book;
use Ipssi\Evaluation\Library;



try {

    
  $date1 = '2019-11-15';
  $date2 = '2019-11-01';
  
$bfm=new Library([
                    $book1= new Book('demain sera plus beau1', 7 ,$date1),
                    $book2= new Book('demain sera plus beau2', 0 ,$date2)

]);
  
  $listBook =array();

  $thomas = new Member($listBook);
   
$thomas->loanBook($book1); 
$thomas->loanBook($book2); 

echo PHP_EOL."You have ". sizeof($thomas->listBook)." book in your list \n";


} catch (NotABookException $e) {
    echo sprintf(
        "An error occured will creating the Libra
        ry, it only accept instances of Book, %s given.",
        $e->getGivenType()
    ) . PHP_EOL;
}