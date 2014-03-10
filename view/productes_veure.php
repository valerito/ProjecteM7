<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/menu.php";
?>
<div id="contenido" class="span8 offset2 hero-unit">
    <h2>Productes</h2>
    <?php
    foreach ($_SESSION["productes"] as $key => $producte) {
        ?>
        Proveidor: <?php echo $producte->getProveidor() ?><br/>
        Unitats en comanda: <?php echo $producte->getUnitatsEnComanda() ?><br/>
        Nom producte: <?php echo $producte->getNomProducte() ?><br/>
        Preu unitat: <?php echo $producte->getPreuUnitat() ?> €<br/>
        Unitats existents: <?php echo  $producte->getUnitatsEnExistencia() ?><br/>
        <div class="btn-group">
            <a class="btn btn-primary" href="#"><i class="icon-cog"></i></a>
            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a class="btn btn-warning" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/ProjecteM7/controller/business/controller_producte.php?action=modificar&id=<?php echo $producte->getId() ?>">Modificar</a></li>
                <li class="divider"></li>
                <li><a class="btn btn-danger" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/ProjecteM7/controller/business/controller_producte.php?action=eliminar&id=<?php echo $producte->getId() ?>">Eliminar</a></li>
            </ul>
        </div>
        <hr/>
        <?php
    }
    unset($_SESSION['clients']);
    ?>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/footer.php";
?>
