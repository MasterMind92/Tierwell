<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modele
 *
 * @author DALO FAUSTIN
 */
class modele {
    private $idmod;
    private $libmod;
    
    function __construct(array $param ) {
        $this->hydratation($param);   
    }
     
    
    
    public function hydratation($param) {
        
        foreach ($array as $key => $value) {
          $method = 'set'.ucfirst($key);
          
          if (method_exists($this, $method)) {
              $this->$method($value);
          }
        }
    }

}
