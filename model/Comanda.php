<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 3/12/13
 * Time: 17:37
 */

class Comanda {
    private $Client;
    private $dataComanda;
    private $dataEntrega;
    private $dataEnviament;
    private $formaEnviament;
    private $destinatari;
    private $adrecaDestinatari;
    private $ciutatDestinatari;
    private $codPostalDestinatari;
    private $paisDestinatari;
    private $id;

    function __construct($Client, $adrecaDestinatari, $ciutatDestinatari, $codPostalDestinatari, $dataComanda, $dataEntrega, $dataEnviament, $destinatari, $formaEnviament, $paisDestinatari, $id)
    {
        $this->Client = $Client;
        $this->adrecaDestinatari = $adrecaDestinatari;
        $this->ciutatDestinatari = $ciutatDestinatari;
        $this->codPostalDestinatari = $codPostalDestinatari;
        $this->dataComanda = $dataComanda;
        $this->dataEntrega = $dataEntrega;
        $this->dataEnviament = $dataEnviament;
        $this->destinatari = $destinatari;
        $this->formaEnviament = $formaEnviament;
        $this->paisDestinatari = $paisDestinatari;
        $this->id = $id;
    }

    /**
     * @param mixed $Client
     */
    public function setClient($Client)
    {
        $this->Client = $Client;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->Client;
    }

    /**
     * @param mixed $adrecaDestinatari
     */
    public function setAdrecaDestinatari($adrecaDestinatari)
    {
        $this->adrecaDestinatari = $adrecaDestinatari;
    }

    /**
     * @return mixed
     */
    public function getAdrecaDestinatari()
    {
        return $this->adrecaDestinatari;
    }

    /**
     * @param mixed $ciutatDestinatari
     */
    public function setCiutatDestinatari($ciutatDestinatari)
    {
        $this->ciutatDestinatari = $ciutatDestinatari;
    }

    /**
     * @return mixed
     */
    public function getCiutatDestinatari()
    {
        return $this->ciutatDestinatari;
    }

    /**
     * @param mixed $codPostalDestinatari
     */
    public function setCodPostalDestinatari($codPostalDestinatari)
    {
        $this->codPostalDestinatari = $codPostalDestinatari;
    }

    /**
     * @return mixed
     */
    public function getCodPostalDestinatari()
    {
        return $this->codPostalDestinatari;
    }

    /**
     * @param mixed $dataComanda
     */
    public function setDataComanda($dataComanda)
    {
        $this->dataComanda = $dataComanda;
    }

    /**
     * @return mixed
     */
    public function getDataComanda()
    {
        return $this->dataComanda;
    }

    /**
     * @param mixed $dataEntrega
     */
    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;
    }

    /**
     * @return mixed
     */
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    /**
     * @param mixed $dataEnviament
     */
    public function setDataEnviament($dataEnviament)
    {
        $this->dataEnviament = $dataEnviament;
    }

    /**
     * @return mixed
     */
    public function getDataEnviament()
    {
        return $this->dataEnviament;
    }

    /**
     * @param mixed $destinatari
     */
    public function setDestinatari($destinatari)
    {
        $this->destinatari = $destinatari;
    }

    /**
     * @return mixed
     */
    public function getDestinatari()
    {
        return $this->destinatari;
    }

    /**
     * @param mixed $formaEnviament
     */
    public function setFormaEnviament($formaEnviament)
    {
        $this->formaEnviament = $formaEnviament;
    }

    /**
     * @return mixed
     */
    public function getFormaEnviament()
    {
        return $this->formaEnviament;
    }

    /**
     * @param mixed $paisDestinatari
     */
    public function setPaisDestinatari($paisDestinatari)
    {
        $this->paisDestinatari = $paisDestinatari;
    }

    /**
     * @return mixed
     */
    public function getPaisDestinatari()
    {
        return $this->paisDestinatari;
    }



} 