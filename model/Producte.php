<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/controller/DAO/Mysqldb.php";
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 3/12/13
 * Time: 17:33
 */

class Producte extends Mysqldb{
    private $nomProducte;
    private $Proveidor;
    private $preuUnitat;
    private $unitatsEnExistencia;
    private $unitatsEnComanda;
    private $id;

    function __construct($nomProducte, $Proveidor, $preuUnitat, $unitatsEnExistencia, $unitatsEnComanda, $id)
    {
        $this->Proveidor = $Proveidor;
        $this->unitatsEnComanda = $unitatsEnComanda;
        $this->nomProducte = $nomProducte;
        $this->preuUnitat = $preuUnitat;
        $this->unitatsEnExistencia = $unitatsEnExistencia;
        $this->id = $id;
    }

    /**
     * @param mixed $Proveidor
     */
    public function setProveidor($Proveidor)
    {
        $this->Proveidor = $Proveidor;
    }

    /**
     * @return mixed
     */
    public function getProveidor()
    {
        return $this->Proveidor;
    }

    /**
     * @param mixed $UnitatsEnComanda
     */
    public function setUnitatsEnComanda($unitatsEnComanda)
    {
        $this->unitatsEnComanda = $unitatsEnComanda;
    }

    /**
     * @return mixed
     */
    public function getUnitatsEnComanda()
    {
        return $this->unitatsEnComanda;
    }

    /**
     * @param mixed $nomProducte
     */
    public function setNomProducte($nomProducte)
    {
        $this->nomProducte = $nomProducte;
    }

    /**
     * @return mixed
     */
    public function getNomProducte()
    {
        return $this->nomProducte;
    }

    /**
     * @param mixed $preuUnitat
     */
    public function setPreuUnitat($preuUnitat)
    {
        $this->preuUnitat = $preuUnitat;
    }

    /**
     * @return mixed
     */
    public function getPreuUnitat()
    {
        return $this->preuUnitat;
    }

    /**
     * @param mixed $unitatsEnExistencia
     */
    public function setUnitatsEnExistencia($unitatsEnExistencia)
    {
        $this->unitatsEnExistencia = $unitatsEnExistencia;
    }

    /**
     * @return mixed
     */
    public function getUnitatsEnExistencia()
    {
        return $this->unitatsEnExistencia;
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
        $resultat = $this->consulta("Select * from productes where idProducte='".$this->getId()."'", "eproject");
        $res = mysql_fetch_array($resultat, 0);
        $this->setNomProducte($res["nomProducte"]);
        $this->setProveidor($res["idProveidor"]);
        $this->setPreuUnitat($res["preusUnitat"]);
        $this->setUnitatsEnExistencia($res["unitatEnExistencia"]);
        $this->setUnitatsEnComanda($res["unitatsEnComanda"]);

    }
    public function insert(){
        $resultat = $this->consulta("INSERT INTO productes (nomProducte, idProveidor, preusUnitat, unitatEnExistencia, unitatsEnComanda) VALUES ('".$this->getNomProducte()."', '".$this->getProveidor()."', '".$this->getPreuUnitat()."', '".$this->getUnitatsEnExistencia()."', '".$this->getUnitatsEnComanda()."')", "eproject");
    }
    
    public function delete(){
        $resultat = $this->consulta("DELETE FROM productes WHERE idProducte='".$this->getId()."'", "eproject");
    }
    
    public function update(){
        $resultat = $this->consulta("UPDATE productes SET nomProducte='".$this->getNomProducte()."', idProveidor='".$this->getProveidor()."', preusUnitat='".$this->getPreuUnitat()."', UnitatEnExistencia='".$this->getUnitatsEnExistencia()."', UnitatsEnComanda='".$this->getUnitatsEnComanda()."' WHERE idProducte = '".$this->id."'", "eproject");
    }


} 