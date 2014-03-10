<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/controller/functions.php";
if (isset($_GET["action"])) {
    if (isset($_SESSION["usuari"])) {
        if ($_GET["action"] == "veure") {
            $empresa = new Empresa();
            $empresa->cargarClients();
            $_SESSION["clients"] = $empresa->getClients();
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/clients_veure.php', true);
        }
        if ($_GET["action"] == "afegir") {
            if(validarClient($_POST["adreca"], $_POST["ciutat"], $_POST["codPostal"], $_POST["fax"], $_POST["nomCompanyia"], $_POST["nomContacte"], $_POST["pais"], $_POST["telf"])==true){
                $client = new Client($_POST["adreca"], $_POST["ciutat"], $_POST["codPostal"], $_POST["fax"], $_POST["nomCompanyia"], $_POST["nomContacte"], $_POST["pais"], $_POST["telf"], "");
                $client->insert();
                header('Location: http://' . $_SERVER['HTTP_HOST'] . "/ProjecteM7/controller/business/controller_client.php?action=veure", true);
            }else{
                header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/clients_afegir.php?validacion=incorrecta', true);
            }       
        }
        if ($_GET["action"] == "eliminar") {
            $client = new Client("", "", "", "", "", "", "", "", $_GET["id"]);
            $client->delete();
            header('Location: http://' . $_SERVER['HTTP_HOST'] . "/ProjecteM7/controller/business/controller_client.php?action=veure", true);
        }
        if ($_GET["action"] == "modificar") {
            $client = new Client("", "", "", "", "", "", "", "", $_GET["id"]);
            $client->select();
            $_SESSION["client"] = $client;
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/clients_modificar.php', true);
        }
        if ($_GET["action"] == "modificar2") {
            if(validarClient($_POST["adreca"], $_POST["ciutat"], $_POST["codPostal"], $_POST["fax"], $_POST["nomCompanyia"], $_POST["nomContacte"], $_POST["pais"], $_POST["telf"])==true){
                $client = new Client($_POST["adreca"], $_POST["ciutat"], $_POST["codPostal"], $_POST["fax"], $_POST["nomCompanyia"], $_POST["nomContacte"], $_POST["pais"], $_POST["telf"], $_GET["id"]);
                $client->update();
                header('Location: http://' . $_SERVER['HTTP_HOST'] . "/ProjecteM7/controller/business/controller_client.php?action=veure", true);
            }else{
                header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/clients_modificar.php?validacion=incorrecta', true);
            }
        }
    } else {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/login.php', true);
    }
}
?>
