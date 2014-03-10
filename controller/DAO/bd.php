<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
	include_once $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/model/Usuari.php";
    session_start();
    if(!isset($_SESSION['clients'])){
        $_SESSION['clients'] = array();
    }
    if(!isset($_SESSION['comandes'])){
        $_SESSION['comandes'] = array();
    }
    if(!isset($_SESSION['productes'])){
        $_SESSION['productes'] = array();
    }
    if(!isset($_SESSION['proveidors'])){
        $_SESSION['proveidors'] = array();
    }
    if(!isset($_SESSION['usuaris'])){
        $_SESSION['usuaris'] = array();
        $_SESSION['usuaris'][0] = new Usuari("valerito", "Samuel", "Valero Llamas", "654321");
    }
    $llistaClients = $_SESSION['clients'];
    $llistaComandes = $_SESSION['comandes'];
    $llistaProductes = $_SESSION['productes'];
    $llistaProveidors = $_SESSION['proveidors'];
    $llistaUsuaris = $_SESSION['usuaris'];
    
