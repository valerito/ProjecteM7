<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/model/Client.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/model/Comanda.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/model/Producte.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/model/Proveidor.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/controller/DAO/bd.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/model/Empresa.php";

function validarComanda($adresaDestinatari, $ciutatDestinatari, $codiPostal, $dataComanda, $dataEntrega, $dataEnviament, $destinatari, $paisDestinatari) {
    $resultat = false;

    if (validarData($dataComanda) && validarData($dataEntrega) && validarData($dataEnviament) && validarCamp($destinatari) && validarCamp($adresaDestinatari) && validarCamp($ciutatDestinatari) && validarCantidad($codiPostal) && validarCamp($paisDestinatari)) {
        $resultat = true;
    }
    return $resultat;
}

function validarClient($adresa, $ciutat, $codi, $fax, $companyia, $contacte, $pais, $telefon) {
    $resultat = false;

    if (validarCamp($adresa) && validarCamp($ciutat) && validarCantidad($codi) && validarCamp($pais) && validarTelefon($telefon) && validarTelefon($fax) && validarCamp($companyia) && validarCamp($contacte)) {
        $resultat = true;
    }
    return $resultat;
}

function validarProducte($idProveidor, $unitatsComanda, $nomProducte, $preuUnitat, $existencies) {
    $resultat = false;

    if (validarCantidad($unitatsComanda) && validarCamp($nomProducte) && validarPrecio($preuUnitat) && validarCantidad($existencies)) {
        $resultat = true;
    }
    return $resultat;
}

function validarProveidor($adresa, $ciutat, $codi, $fax, $companyia, $contacte, $pais, $telefon, $web) {
    $resultat = false;

    if (validarCamp($adresa) && validarCamp($ciutat) && validarCantidad($codi) && validarTelefon($fax) && validarCamp($companyia) && validarCamp($contacte) && validarCamp($pais) && validarTelefon($telefon) && validarWeb($web)) {
        $resultat = true;
    }
    return $resultat;
}

function validarCamp($campo) {
    $RegExPattern = "/^[ñç\ \w]{1,20}$/";
    $resultat = false;

    if (preg_match($RegExPattern, $campo) && $campo != null & $campo != "") {
        $resultat = true;
    }

    return $resultat;
}

function validarPrecio($campo) {
    $RegExPattern = "/(^\d*\.?\d*[0-9]+\d*$)|(^[0-9]+\d*\.\d*$)/";
    $resultat = false;

    if (preg_match($RegExPattern, $campo) && $campo != null & $campo != "") {
        $resultat = true;
    }

    return $resultat;
}

function validarCantidad($campo) {
    $RegExPattern = "/^\d{1,5}$/";
    $resultat = false;

    if (preg_match($RegExPattern, $campo) && $campo != null & $campo != "") {
        $resultat = true;
    }

    return $resultat;
}

function validarDescuento($campo) {
    $RegExPattern = "/^([1-9]{0,1})([0-9]{1})(\.[0-9])?$/";
    $resultat = false;

    if (preg_match($RegExPattern, $campo) && $campo != null & $campo != "") {
        $resultat = true;
    }

    return $resultat;
}

function validarTelefon($campo) {
    $RegExPattern = "/^\d{1,9}$/";
    $resultat = false;

    if (preg_match($RegExPattern, $campo) && $campo != null & $campo != "") {
        $resultat = true;
    }

    return $resultat;
}

function validarWeb($campo) {
    $RegExPattern = "/^(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,4}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&amp;?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?$/";
    $resultat = false;

    if (preg_match($RegExPattern, $campo) && $campo != null & $campo != "") {
        $resultat = true;
    }

    return $resultat;
}

function validarData($campo) {
    $RegExPattern = "/^\d{2}[\-\/]{1}\d{2}[\-\/]{1}\d{4}$/";
    $resultat = false;

    if (preg_match($RegExPattern, $campo) && $campo != null & $campo != "") {
        $resultat = true;
    } else {
        echo '<div class="hero-unit">Maldito validador</div>';
    }

    return $resultat;
}