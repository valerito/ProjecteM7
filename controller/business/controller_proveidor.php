<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/controller/functions.php";
if (isset($_GET["action"])) {
    if (isset($_SESSION["usuari"])) {
        if ($_GET["action"] == "veure") {
            $empresa = new Empresa();
            $empresa->cargarProveidors();
            $_SESSION["proveidors"] = $empresa->getProveidors();
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/proveidors_veure.php', true);
        }
        if ($_GET["action"] == "afegir") {
            if(validarProveidor($_POST["adreca"], $_POST["ciutat"], $_POST["codPostal"], $_POST["fax"], $_POST["nomCompanyia"], $_POST["nomContacte"], $_POST["pais"], $_POST["telf"], $_POST["website"])==true){
                $proveidor = new Proveidor($_POST["adreca"], $_POST["ciutat"], $_POST["codPostal"], $_POST["fax"], $_POST["nomCompanyia"], $_POST["nomContacte"], $_POST["pais"], $_POST["telf"], $_POST["website"], "");
                $proveidor->insert();
                header('Location: http://' . $_SERVER['HTTP_HOST'] . "/ProjecteM7/controller/business/controller_proveidor.php?action=veure", true);
            }else{
                header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/proveidors_afegir.php?validacion=incorrecta', true);
            }  
        }
        if ($_GET["action"] == "eliminar") {
            $proveidor = new Proveidor("", "", "", "", "", "", "", "", "", $_GET["id"]);
            $proveidor->delete();
            header('Location: http://' . $_SERVER['HTTP_HOST'] . "/ProjecteM7/controller/business/controller_proveidor.php?action=veure", true);
        }
        if ($_GET["action"] == "modificar") {
            $proveidor = new Proveidor("", "", "", "", "", "", "", "", "", $_GET["id"]);
            $proveidor->select();
            $_SESSION["proveidor"] = $proveidor;
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/proveidors_modificar.php', true);
        }
        if ($_GET["action"] == "modificar2") {
            if(validarProveidor($_POST["adreca"], $_POST["ciutat"], $_POST["codPostal"], $_POST["fax"], $_POST["nomCompanyia"], $_POST["nomContacte"], $_POST["pais"], $_POST["telf"], $_POST["website"])==true){
                $proveidor = new Proveidor($_POST["adreca"], $_POST["ciutat"], $_POST["codPostal"], $_POST["fax"], $_POST["nomCompanyia"], $_POST["nomContacte"], $_POST["pais"], $_POST["telf"], $_POST["website"], $_GET["id"]);
                $proveidor->update();
                header('Location: http://' . $_SERVER['HTTP_HOST'] . "/ProjecteM7/controller/business/controller_proveidor.php?action=veure", true);
            }else{
                header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/proveidors_modificar.php?validacion=incorrecta', true);
            }
        }
    } else {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/login.php', true);
    }
}
?>
