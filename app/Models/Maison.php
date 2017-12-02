<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Maison
 *
 * @author DALO FAUSTIN
 */
class Maison {
    private $idmais;
    private $matmais;
    private $idmod;
    private $id_lot;
    
    
    function __construct( array $param) {
        $this->hydratation($param);
    }
    
    //Setters
    function getIdmais() {
        return $this->idmais;
    }

    function getMatmais() {
        return $this->matmais;
    }

    function getIdmod() {
        return $this->idmod;
    }

    function getId_lot() {
        return $this->id_lot;
    }

    function setIdmais($idmais) {
        $this->idmais = $idmais;
    }

    function setMatmais($matmais) {
        $this->matmais = $matmais;
    }

    function setIdmod($idmod) {
        $this->idmod = $idmod;
    }

    function setId_lot($id_lot) {
        $this->id_lot = $id_lot;
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
