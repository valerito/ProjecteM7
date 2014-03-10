<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/controller/functions.php";
if (isset($_GET["action"])) {
    if (isset($_SESSION["usuari"])) {
        if ($_GET["action"] == "veure") {
            $empresa = new Empresa();
            $empresa->cargarProductes();
            $_SESSION["productes"] = $empresa->getProductes();
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/productes_veure.php', true);
        }
        if ($_GET["action"] == "afegir") {
            if (validarProducte($_POST["proveidor"], $_POST["unitatEnComanda"], $_POST["nomProducte"], $_POST["preuUnitat"], $_POST["unitatEnExistencia"])==true) {
                $producte = new Producte($_POST["nomProducte"], $_POST["proveidor"], $_POST["preuUnitat"], $_POST["unitatEnExistencia"], $_POST["unitatEnComanda"], "");
                $producte->insert();
                header('Location: http://' . $_SERVER['HTTP_HOST'] . "/ProjecteM7/controller/business/controller_producte.php?action=veure", true);
            } else {
                header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/productes_afegir.php?validacion=incorrecta', true);
            }
        }
        if ($_GET["action"] == "eliminar") {
            $producte = new Producte("", "", "", "", "", $_GET["id"]);
            $producte->delete();
            header('Location: http://' . $_SERVER['HTTP_HOST'] . "/ProjecteM7/controller/business/controller_producte.php?action=veure", true);
        }
        if ($_GET["action"] == "modificar") {
            $producte = new Producte("", "", "", "", "", $_GET["id"]);
            $producte->select();
            $_SESSION["producte"] = $producte;
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/productes_modificar.php', true);
        }
        if ($_GET["action"] == "modificar2") {
            if (validarProducte($_POST["proveidor"], $_POST["unitatEnComanda"], $_POST["nomProducte"], $_POST["preuUnitat"], $_POST["unitatEnExistencia"])==true) {
                $producte = new Producte($_POST["nomProducte"], $_POST["proveidor"], $_POST["preuUnitat"], $_POST["unitatEnExistencia"], $_POST["unitatEnComanda"], $_GET["id"]);
                $producte->update();
                header('Location: http://' . $_SERVER['HTTP_HOST'] . "/ProjecteM7/controller/business/controller_producte.php?action=veure", true);
            } else {
                header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/productes_modificar.php?validacion=incorrecta', true);
            }
        }
    } else {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/login.php', true);
    }
}
?>
