<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/menu.php";
?>
<div id="contenido" class="span8 offset2 hero-unit">
    <h2>Proveidors</h2>
    <?php
    foreach ($_SESSION["proveidors"] as $key => $proveidor) {
        ?>
        Nom: <?php echo $proveidor->getNomContacte() ?><br/>
        Nom companyia:  <?php echo $proveidor->getNomCompanyia() ?><br/>
        Adreça:  <?php echo $proveidor->getAdreca() ?><br/>
        Codi postal:  <?php echo $proveidor->getCodPostal() ?><br/>
        Ciutat:  <?php echo $proveidor->getCiutat() ?><br/>
        Pais:  <?php echo $proveidor->getPais() ?><br/>
        Telefon:  <?php echo $proveidor->getTelf() ?><br/>
        Fax:  <?php echo $proveidor->getFax() ?><br/>
        Website:  <?php echo $proveidor->getWebSite() ?><br/>
        <div class="btn-group">
            <a class="btn btn-primary" href="#"><i class="icon-cog"></i></a>
            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a class="btn btn-warning" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/ProjecteM7/controller/business/controller_proveidor.php?action=modificar&id=<?php echo $proveidor->getId() ?>">Modificar</a></li>
                <li class="divider"></li>
                <li><a class="btn btn-danger" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/ProjecteM7/controller/business/controller_proveidor.php?action=eliminar&id=<?php echo $proveidor->getId() ?>">Eliminar</a></li>
            </ul>
        </div>
        <br/>
        <?php
    }
    unset($_SESSION['proveidors']);
    ?>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/footer.php";
?>
