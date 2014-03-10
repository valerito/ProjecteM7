<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/menu.php";
?>
<div id="contenido" class="span8 offset2 hero-unit">
    <h2>Clients</h2>
    <?php
    foreach ($_SESSION["clients"] as $key => $client) {
        ?>
        Nom: <?php echo $client->getNomContacte() ?><br/>
        Nom companyia:  <?php echo $client->getNomCompanyia() ?><br/>
        Adreça:  <?php echo $client->getAdreca() ?><br/>
        Codi postal:  <?php echo $client->getCodPostal() ?><br/>
        Ciutat:  <?php echo $client->getCiutat() ?><br/>
        Pais:  <?php echo $client->getPais() ?><br/>
        Telefon:  <?php echo $client->getTelf() ?><br/>
        Fax:  <?php echo $client->getFax() ?><br/>
        <div class="btn-group">
            <a class="btn btn-primary" href="#"><i class="icon-cog"></i></a>
            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a class="btn btn-warning" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/ProjecteM7/controller/business/controller_client.php?action=modificar&id=<?php echo $client->getId() ?>">Modificar</a></li>
                <li class="divider"></li>
                <li><a class="btn btn-danger" href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/ProjecteM7/controller/business/controller_client.php?action=eliminar&id=<?php echo $client->getId() ?>">Eliminar</a></li>
            </ul>
        </div>
        <br/>
        <?php
    }
    unset($_SESSION['clients']);
    ?>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/footer.php";
?>
