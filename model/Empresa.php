<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/controller/DAO/Mysqldb.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author Samuel
 */
class Empresa extends Mysqldb{
    //put your code here
    private $clients;
    private $comandes;
    private $productes;
    private $proveidors;
    private $usuaris;
    
    function __construct() {
        $this->clients = Array();
        $this->comandes = Array();
        $this->productes = Array();
        $this->proveidors = Array();
        $this->usuaris = Array();
    }
    
    public function getClients() {
        return $this->clients;
    }

    public function getComandes() {
        return $this->comandes;
    }

    public function getProductes() {
        return $this->productes;
    }

    public function getProveidors() {
        return $this->proveidors;
    }

    public function getUsuaris() {
        return $this->usuaris;
    }

    public function setClients($clients) {
        $this->clients = $clients;
    }

    public function setComandes($comandes) {
        $this->comandes = $comandes;
    }

    public function setProductes($productes) {
        $this->productes = $productes;
    }

    public function setProveidors($proveidors) {
        $this->proveidors = $proveidors;
    }

    public function setUsuaris($usuaris) {
        $this->usuaris = $usuaris;
    }

    public function cargarClients(){
        $resultat = $this->consulta("Select * from clients", "eproject");
        while ($fila = mysql_fetch_array($resultat)) {
            $this->clients[] = new Client($fila["adreca"], $fila["ciutat"], $fila["codPostal"], $fila["fax"], $fila["nomCompanyia"], $fila["nomContacte"], $fila["pais"], $fila["telf"], $fila["idClient"]);
        }
    }
    public function cargarProductes(){
        $resultat = $this->consulta("Select * from productes", "eproject");
        while ($fila = mysql_fetch_array($resultat)) {
            $this->productes[] = new Producte($fila["nomProducte"], $fila["idProveidor"], $fila["preusUnitat"], $fila["unitatEnExistencia"], $fila["unitatsEnComanda"], $fila["idProducte"]);
        }
    }
    public function cargarProveidors(){
        $resultat = $this->consulta("Select * from proveidors", "eproject");
        while ($fila = mysql_fetch_array($resultat)) {
            $this->proveidors[] = new Proveidor($fila["adreca"], $fila["ciutat"], $fila["codPostal"], $fila["fax"], $fila["nomCompanyia"], $fila["nomContacte"], $fila["pais"], $fila["telf"], $fila["website"], $fila["idProveidor"]);
        }
    }
    public function cargarComandes(){
        $resultat = $this->consulta("Select * from clients", "eproject");
        while ($fila = mysql_fetch_array($resultat)) {
            $this->clients[] = new Client($fila["idClient"], $fila["adrecaDestinatari"], $fila["ciutatDestinatari"], $fila["codPostalDestinatari"], $fila["dataComanda"], $fila["dataEntrega"], $fila["dataEnviament"], $fila["destinatari"], $fila["formaEnviament"], $fila["paisDestinatari"], $fila["idComanda"]);
        }
    }
}
