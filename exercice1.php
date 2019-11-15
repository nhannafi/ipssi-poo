<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

class Diviseur {

    public function division( $index, $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];


        if( !is_numeric($index) || !is_int($index/1) ){ 
           throw new Exception("l'index doit etre un entier ou non une valeur vide ");
        }            
        if(!is_numeric($diviseur) ){
            throw new Exception("le diviseur doit etre un entier ou non une valeur vide ");
        }
        if ($index > sizeof($valeurs) || $index < 0){
            throw new Exception("l'indice de la valeur n'existe pas veuillez saisir un indice entre 0 et 91");
        }
        if ($diviseur == '0') { 
            throw new Exception("la division par zéro est interdite");
        }
        
        // if(!is_numeric($diviseur) || !is_numeric($index))
        // {
        //     throw new Exception (" Veuillez entrer un indice et/ou un diviseur  de type entier");
        // }
        // if( $diviseur ==  0)
        // {
        //     throw new Exception (" Le diviseur ne peut pas etre null");
        // }
        // if( $index < 0 || $index > sizeof($valeurs))
        // {
        //     throw new Exception (" L'index entré est invalide");
        // }
        
        // if( empty($diviseur))
        // {
        //     throw new Exception (" Veuillez entrer un diviseur non vide");
        // }
        // if( !empty ($index))
        // {
        //     throw new Exception (" Veuillez entrer un indice  non vide");
        // }
        else{
            return $valeurs[$index] / $diviseur;
        }
    }
}

do
{
    $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
    $index = $input->prompt();
    
    $input = $climate->input("Entrez le diviseur : ");
    $diviseur = $input->prompt();
    
    $error = false;

    try{
        $climate->output("Le résultat de la division est : " . (new Diviseur())->division($index, $diviseur));
    }
    catch(Exception $e){
        $climate->error($e->getMessage());
        $error = true;
    }
}
while( (isset($error) === true)
);

