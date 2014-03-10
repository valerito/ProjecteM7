<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/controller/DAO/Mysqldb.php";
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 3/12/13
 * Time: 17:39
 */

class Proveidor extends Mysqldb{
    private $nomCompanyia;
    private $nomContacte;
    private $adreca;
    private $ciutat;
    private $codPostal;
    private $pais;
    private $telf;
    private $fax;
    private $webSite;
    private $id;

    function __construct($adreca, $ciutat, $codPostal, $fax, $nomCompanyia, $nomContacte, $pais, $telf, $webSite, $id)
    {
        $this->adreca = $adreca;
        $this->ciutat = $ciutat;
        $this->codPostal = $codPostal;
        $this->fax = $fax;
        $this->nomCompanyia = $nomCompanyia;
        $this->nomContacte = $nomContacte;
        $this->pais = $pais;
        $this->telf = $telf;
        $this->webSite = $webSite;
        $this->id = $id;
    }

    /**
     * @param mixed $adreca
     */
    public function setAdreca($adreca)
    {
        $this->adreca = $adreca;
    }

    /**
     * @return mixed
     */
    public function getAdreca()
    {
        return $this->adreca;
    }

    /**
     * @param mixed $ciutat
     */
    public function setCiutat($ciutat)
    {
        $this->ciutat = $ciutat;
    }

    /**
     * @return mixed
     */
    public function getCiutat()
    {
        return $this->ciutat;
    }

    /**
     * @param mixed $codPostal
     */
    public function setCodPostal($codPostal)
    {
        $this->codPostal = $codPostal;
    }

    /**
     * @return mixed
     */
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $nomCompanyia
     */
    public function setNomCompanyia($nomCompanyia)
    {
        $this->nomCompanyia = $nomCompanyia;
    }

    /**
     * @return mixed
     */
    public function getNomCompanyia()
    {
        return $this->nomCompanyia;
    }

    /**
     * @param mixed $nomContacte
     */
    public function setNomContacte($nomContacte)
    {
        $this->nomContacte = $nomContacte;
    }

    /**
     * @return mixed
     */
    public function getNomContacte()
    {
        return $this->nomContacte;
    }

    /**
     * @param mixed $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $telf
     */
    public function setTelf($telf)
    {
        $this->telf = $telf;
    }

    /**
     * @return mixed
     */
    public function getTelf()
    {
        return $this->telf;
    }

    /**
     * @param mixed $webSite
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;
    }

    /**
     * @return mixed
     */
    public function getWebSite()
    {
        return $this->webSite;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
    
    
    public function select(){
        $resultat = $this->consulta("Select * from proveidors where idProveidor='".$this->getId()."'", "eproject");
        $res = mysql_fetch_array($resultat, 0);
        $this->setNomCompanyia($res["nomCompanyia"]);
        $this->setNomContacte($res["nomContacte"]);
        $this->setAdreca($res["adreca"]);
        $this->setCiutat($res["ciutat"]);
        $this->setCodPostal($res["codPostal"]);
        $this->setPais($res["pais"]);
        $this->setTelf($res["telf"]);
        $this->setFax($res["fax"]);
        $this->setWebSite($res["website"]);
    }
    public function insert(){
        $resultat = $this->consulta("INSERT INTO proveidors (nomCompanyia, nomContacte, adreca, ciutat, codPostal, pais, telf, fax, website) VALUES ('".$this->getNomCompanyia()."', '".$this->getNomContacte()."', '".$this->getAdreca()."', '".$this->getCiutat()."', '".$this->getCodPostal()."', '".$this->getPais()."', '".$this->getTelf()."', '".$this->getFax()."', '".$this->getWebSite()."')", "eproject");
    }
    
    public function delete(){
        $resultat = $this->consulta("DELETE FROM proveidors WHERE idProveidor='".$this->getId()."'", "eproject");
    }
    
    public function update(){
        $resultat = $this->consulta("UPDATE proveidors SET nomCompanyia='".$this->getNomCompanyia()."', nomContacte='".$this->getNomContacte()."', adreca='".$this->getAdreca()."', ciutat='".$this->getCiutat()."', codPostal='".$this->getCodPostal()."', pais='".$this->getPais()."', telf='".$this->getTelf()."', fax='".$this->getFax()."', website='".$this->getWebSite()."' WHERE idProveidor = '".$this->id."'", "eproject");
    }

}