<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mysqldb
 *
 * @author Samuel
 */
abstract class Mysqldb {
    //put your code here
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname;
    private $link;
    
    public function getServer() {
        return $this->server;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDbname() {
        return $this->dbname;
    }

    public function getLink() {
        return $this->link;
    }
    
    public function setServer($server) {
        $this->server = $server;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setDbname($dbname) {
        $this->dbname = $dbname;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function connect(){
        try{
            $con=mysql_connect($this->getServer(),$this->getUsername(),$this->getPassword());			
            if (!$con) {
                    die('Error, could not connect: ' . mysql_error());
            }
            $this->link = $con;
            return $con;
        } catch (Exception $ex) {
            echo $ex;
            return null;
        }
    }
	
    public function bd($database, $con){
        try{
            $db = mysql_select_db($database, $con);
            $this->dbname = $db;
            if (!$db) {
                die ('Error, can\'t use database: ' . mysql_error());
            }
            return $db;
        } catch (Exception $ex) {
            echo $ex;
            return null;
        }
    }

    public function close(){
        try{
            return mysql_close($this->link);
        } catch (Exception $ex) {
            echo $ex;
            return null;
        }
    }

    public function error()	{
        return mysql_error($this->link);
    }

    public function consulta($query, $database){		
        $con= $this->connect();
        $this->bd($database, $con);
        try{
            $resultat = mysql_query($query, $con) or die('Error, query failed: '.$this->error());
            $this->close();
            return $resultat;
        } catch (Exception $ex) {
            echo $ex;
            $this->close();
            return null;
        }
    }    
}
