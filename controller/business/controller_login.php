<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/controller/functions.php";
if (isset($_POST["user"])) {
    session_start();
    $usuari = new Usuari($_POST["user"], null, null, null);
    $usuari->select();
    if ($usuari->verificarPassword($_POST["pass"])) {
        $_SESSION['usuari'] = $usuari;
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/index.php', true);
    } else {
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/login.php?message=0', true);
    }
}
if (isset($_GET["logout"])) {
    if ($_GET["logout"] == "true") {
        unset($_SESSION['usuari']);
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/ProjecteM7/view/login.php', true);
    }
}
?>
