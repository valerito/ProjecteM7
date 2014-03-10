<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/controller/DAO/Mysqldb.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuari
 *
 * @author Samuel
 */
class Usuari extends Mysqldb{
    //put your code here
    private $usuari;
    private $nom;
    private $cognoms;
    private $password;
    
    function __construct($usuari, $nom, $cognoms, $password) {
        $this->usuari = $usuari;
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->password = $password;
    }

    public function getUsuari() {
        return $this->usuari;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getCognoms() {
        return $this->cognoms;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUsuari($usuari) {
        $this->usuari = $usuari;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCognoms($cognoms) {
        $this->cognoms = $cognoms;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function select(){
        $resultat = $this->consulta("Select * from usuaris where usuari='".$this->getUsuari()."'", "eproject");
        $res = mysql_fetch_array($resultat, 0);
        $this->setNom($res["nom"]);
        $this->setCognoms($res["cognom"]);
        $this->setUsuari($res["usuari"]);
        $this->setPassword($res["password"]);
    }
    
    public function insert(){
        $resultat = $this->consulta("Select * from usuaris where usuari='".$this->getUsuari()."'", "eproject");
        $res = mysql_fetch_array($resultat, 0);
        $this->setNom($res["nom"]);
        $this->setCognoms($res["cognom"]);
        $this->setUsuari($res["usuari"]);
        $this->setPassword($res["password"]);
    }
    
    public function update(){
        
    }
    
    public function verificarPassword($pass){
        if($this->getPassword()!=null){
            if($this->getPassword()==md5($pass)){
                return true;
            }
        }
        return false;
    }
}
