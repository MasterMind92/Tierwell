<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connexion
 *
 * @author Dalo Marc-Andre
 */
class Connexion {
    
    //put your code here
    private static $conx;
    private static $user="root";
    private static $mdp="";
    private static $dns = "mysql:host=localhost;dbname=projetlp";
    private static $err="";


    function __construct() {
        Connexion::$conx = new PDO(Connexion::$dns, Connexion:: $user, Connexion:: $mdp);
    }
    
    static function getconnexion()
    {
        return Connexion::$conx;
    }
    static function getUser() {
        return self::$user;
    }

    static function getMdp() {
        return self::$mdp;
    }

    static function getDns() {
        return self::$dns;
    }   
    
    static function getErr(){
       Connexion::$err=Connexion::$conx->errorInfo();
       
       return Connexion::$err[2];
    }

}
