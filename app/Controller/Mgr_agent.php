<?php
//require_once '../Connexion/Connexion.php';
require_once ''; //model devant etre gerer par le controller 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mgr_agent
 *
 * @author Axel
 */

class Mgr_agent {
    //put your code here
    private $conx;
    
    function __construct() {
        $this->conx = Connexion::getconnexion();
    }
    

    //methode d'insertion du modele 
    function add_ag(Agent $ag) {
        
        $req="INSERT INTO agent (nom_ag, prm_ag, cont_ag, login_ag, mdp_ag, sup_ag, id_tagent) VALUE(?,?,?,?,?,?,?)";
        $im=  $this->conx->prepare($req);
        $im->execute(
                array(
                 'nom_ag' => $ag->getNom_ag(),
                 'prm_ag' => $ag->getPrm_ag(),
                 'cont_ag' => $ag->getCont_ag(),
                 'login_ag' => $ag->getLogin_ag(),
                 'mdp_ag' => $ag->getMdp_ag(),
                 'sup_ag' => $ag->getSup_ag(),
                 'id_tagent' => $ag->getId_tagent()
                )
          );
        
          if ($im) {
              $rep= 'Agent ajouté avec succès ';
          }  else {
              $rep= "Erreur survenu lors de l'ajout";
          }
        
          return $rep;        
    }

    //fonction pour obtenir la liste de tout les agents
    function list_ag() {
        $liste=array();
        $req="SELECT * FROM agent";
        $exe=$this->conx->query($req);
        while ($res = $exe->fetch()) {
          $liste[]= new Agent($res);  
        } 
        return $liste;
    }
    
    //fonction pour recuperer instance du modele en fonction d'un ou plusieurs parametres
    function recup_ag($log,$mdp) {
      
        $log = $this->conx->quote($log);
        $mdp = $this->conx->quote($mdp);
        $req = "SELECT * FROM agent WHERE login_ag = $log AND mdp_ag = $mdp ";//requete
        $exe = $this->conx->query($req);
        $res = $exe->fetch();
        $ag = new Agent($res);
        return $ag;
    }

    
    
    function list_ac(Agent $ag) {
        $liste=array();
        $req="SELECT * FROM agent WHERE id_tagent=5 AND sup_ag=".(int)$ag->getId_ag();
        $exe=$this->conx->query($req);
        while ($res = $exe->fetch()) {
          $liste[]=new Agent($res);  
        } 
        return $liste;
    }
    
    function list_cont(Agent $ag) {
        $liste=array();
        $req="SELECT * FROM agent WHERE id_tagent=4 AND sup_ag=".$ag->getId_ag();
        $exe=$this->conx->query($req);
        while ($res = $exe->fetch()) {
          $liste[]=new Agent($res);  
        } 
        return $liste;
    }
    
    
}
