<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rdv
 *
 * @author DALO FAUSTIN
 */
class Rdv {
    private $id_rdv;
    private $date_rdv;
    private $jour_rdv;
    private $mois_rdv;
    private $annee_rdv;
    private $heure_deb_rdv;
    private $heure_fin_rdv;
    private $lib_jour_rdv;
    private $etat_rdv;
    private $idsous;
    
    public function __construct( array $param) {
        $this->hydratation($param);
    }
    
    function getId_rdv() {
        return $this->id_rdv;
    }

    function getDate_rdv() {
        return $this->date_rdv;
    }

    function getJour_rdv() {
        return $this->jour_rdv;
    }

    function getMois_rdv() {
        return $this->mois_rdv;
    }

    function getAnnee_rdv() {
        return $this->annee_rdv;
    }

    function getHeure_deb_rdv() {
        return $this->heure_deb_rdv;
    }

    function getHeure_fin_rdv() {
        return $this->heure_fin_rdv;
    }

    function getLib_jour_rdv() {
        return $this->lib_jour_rdv;
    }

    function getEtat_rdv() {
        return $this->etat_rdv;
    }

    function getIdsous() {
        return $this->idsous;
    }

    function setId_rdv($id_rdv) {
        $this->id_rdv = $id_rdv;
    }

    function setDate_rdv($date_rdv) {
        $this->date_rdv = $date_rdv;
    }

    function setJour_rdv($jour_rdv) {
        $this->jour_rdv = $jour_rdv;
    }

    function setMois_rdv($mois_rdv) {
        $this->mois_rdv = $mois_rdv;
    }

    function setAnnee_rdv($annee_rdv) {
        $this->annee_rdv = $annee_rdv;
    }

    function setHeure_deb_rdv($heure_deb_rdv) {
        $this->heure_deb_rdv = $heure_deb_rdv;
    }

    function setHeure_fin_rdv($heure_fin_rdv) {
        $this->heure_fin_rdv = $heure_fin_rdv;
    }

    function setLib_jour_rdv($lib_jour_rdv) {
        $this->lib_jour_rdv = $lib_jour_rdv;
    }

    function setEtat_rdv($etat_rdv) {
        $this->etat_rdv = $etat_rdv;
    }

    function setIdsous($idsous) {
        $this->idsous = $idsous;
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
