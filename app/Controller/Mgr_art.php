<?php

//require_once '../Models/Article.php'; //model devant etre gerer par le controller 

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
class Mgr_art {

    
    private $conx;

    function __construct() {
        $this->conx = Connexion::getconnexion();
    }

    //methode d'insertion du modele 
    function add_art(Article $ag) {

        if (isset($_FILES['photo'])) {

            $baseurlxampp="C:/xampp/htdocs/tests/ProjetLP/"; 
            $baseurlwamp="C:/wamp64/www/tests/ProjetLP/"; 
            $errors = array();
            $file_name = $_FILES['photo']['name'];
            $file_size = $_FILES['photo']['size'];
            $file_tmp = $_FILES['photo']['tmp_name'];
            $file_type = $_FILES['photo']['type'];
            
            $extension = explode('.', $file_name);

            $file_ext = strtolower(end($extension));

            $expensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $expensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }

            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }

            if (empty($errors) == true) {
                $chemin= $baseurlwamp."public/img/".$file_name."";
                
                move_uploaded_file($file_tmp, $baseurlwamp . "public/img/" . $file_name);
                $rep="Article Ajoute avec succes";
            } else {
                $rep= $errors;
            }

        }
        /*var_dump($chemin);
        exit();*/
        
        $req = "INSERT INTO article (design_art, prix_art, marq_art, qte_art, descr_art, car_art,id_catg,img_art) VALUES(?,?,?,?,?,?,?,?)";
        $im = $this->conx->prepare($req);
        $im->execute(
                array(
                    $ag->getDesign_art(),
                    $ag->getPrix_art(),
                    $ag->getMarq_art(),
                    $ag->getQte_art(),
                    $ag->getDescr_art(),
                    $ag->getCar_art(),
                    $ag->getId_catg(),
                    $chemin
                )
        );

        return $rep;
        #var_dump($chemin);
    }

    //fonction pour obtenir la liste de tout les article
    function obj_list_art() {
        $liste = array();
        $req = "SELECT * FROM article";
        $exe = $this->conx->query($req);
        while ($res = $exe->fetch(PDO::FETCH_ASSOC)) {
            $liste[] = new Article($res);
        }
        return $liste;
    }

    //fonction pour obtenir la liste de tout les article
    function obj_rech_art($chaine) {
        $liste = array();
        $req = "SELECT * FROM article WHERE design_art LIKE('%$chaine%')";
        $exe = $this->conx->query($req);
        while ($res = $exe->fetch(PDO::FETCH_ASSOC)) {
            $liste[] = new Article($res);
        }
        return $liste;
    }

    function list_art() {

        $res = array();
        $req = "SELECT * FROM article";
        $exe = $this->conx->query($req);
        $res = $exe->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    //fonction de recuperation des valeur sous le format json
    function json_list_art() {

        $liste = array();
        $req = "SELECT * FROM article";
        $exe = $this->conx->query($req);
        while ($res = $exe->fetch(PDO::FETCH_NUM)) {
            $liste[] = $res;
        }
        return $liste;
    }

    //fonction pour obtenir la liste de tout les article
    function id_list_art($id) {
        $liste = array();
        $req = "SELECT * FROM article where id_art=" . (int) $id;
        $exe = $this->conx->query($req);
        while ($res = $exe->fetch(PDO::FETCH_ASSOC)) {
            $liste[] = $res;
        }
        return $liste[0];
    }

    //fonction pour recuperer instance du modele en fonction d'un ou plusieurs caracteres

    function rech_art($chaine) {
        $result = array();
        $req = "SELECT * FROM article WHERE design_art LIKE('%$chaine%')"; //requete
        $exe = $this->conx->query($req);

        while ($ligne = $exe->fetch(PDO::FETCH_ASSOC)) {
            $result [] = $ligne;
        }
        return $result;
    }
    
    function rech_art_id($id) {
        $result = array();
        $req = "SELECT * FROM article WHERE id_art= $id"; //requete
        $exe = $this->conx->query($req);

        while ($ligne = $exe->fetch(PDO::FETCH_ASSOC)) {
            $result [] = $ligne;
        }
        return $result;
    }
    
    function update_art(Article $art){
        
            /*print_r($art);
            exit();*/

        $req = "UPDATE article set design_art=:design, prix_art=:prix, qte_art=:qte, descr_art=:descr, car_art=:car, marq_art=:marq, id_catg=:id_catg where id_art=:id_art";
        $st= $this->conx->prepare($req);
        $exe=$st->execute(
            array(
                ":design"=>$art->getDesign_art(),
                ":prix"=>$art->getPrix_art(),
                ":qte"=>$art->getQte_art(),
                ":descr"=>$art->getDescr_art(),
                ":car"=>$art->getCar_art(),
                ":marq"=>$art->getMarq_art(),
                ":id_catg"=>$art->getId_catg(),
                ":id_art" =>$art->getId_art()
            )
        );
        /*print_r($exe);
        exit();*/
         
        if ($exe==TRUE) {
            return "Article modifie avec succes";
        }else{
            return "Erreur lors de la modification de l'article";
        }
    }


}
