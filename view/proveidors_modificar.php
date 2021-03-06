<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/menu.php";
?>
<div id="contenido" class="span8 offset2 hero-unit">
    <?php
    if (isset($_GET["validacion"])) {
        ?>
        <span class="help-inline" id="err">*formulari incorrecte</span>
        <?php
    }
    ?>
    <h2>Proveidors</h2>
    <form name="modificarProveidor" class="form-horizontal" action="/ProjecteM7/controller/business/controller_proveidor.php?action=modificar2&id=<?php echo $_SESSION["proveidor"]->getId() ?>" method="post">
        <div class="control-group" id="valNomCompanyia">
            <label class="control-label" for="nomCompanyia">Nom companyia</label>
            <div class="controls">
                <input type="text" name="nomCompanyia" id="nomCompanyia" value="<?php echo $_SESSION["proveidor"]->getNomCompanyia() ?>" onchange='validarCamp($(this))'>
                <span class="help-inline" id="errNomCompanyia"></span>
            </div>
        </div>
        <div class="control-group" id="valNomContacte">
            <label class="control-label" for="nomContacte">Nom contacte</label>
            <div class="controls">
                <input type="text" name="nomContacte" id="nomContacte" value="<?php echo $_SESSION["proveidor"]->getNomContacte() ?>" onchange='validarCamp($(this))'>
                <span class="help-inline" id="errNomContacte"></span>
            </div>
        </div>
        <div class="control-group" id="valAdresa">
            <label class="control-label" for="adresa">Adreça</label>
            <div class="controls">
                <input type="text" name="adreca" id="adresa" value="<?php echo $_SESSION["proveidor"]->getAdreca() ?>" onchange='validarCamp($(this))'>
                <span class="help-inline" id="errAdresa"></span>
            </div>
        </div>
        <div class="control-group" id="valCiutat">
            <label class="control-label" for="ciutat">Ciutat</label>
            <div class="controls">
                <input type="text" name="ciutat" id="ciutat" value="<?php echo $_SESSION["proveidor"]->getCiutat() ?>" onchange='validarCamp($(this))'>
                <span class="help-inline" id="errCiutat"></span>
            </div>
        </div>
        <div class="control-group" id="valCodi">
            <label class="control-label" for="codi">Codi postal</label>
            <div class="controls">
                <input type="text" name="codPostal" id="codi" value="<?php echo $_SESSION["proveidor"]->getCodPostal() ?>" onchange='validarCantidad($(this))'>
                <span class="help-inline" id="errCodi"></span>
            </div>
        </div>
        <div class="control-group" id="valPais">
            <label class="control-label" for="pais">Pais</label>
            <div class="controls">
                <input type="text" name="pais" id="pais" value="<?php echo $_SESSION["proveidor"]->getPais() ?>" onchange='validarCamp($(this))'>
                <span class="help-inline" id="errPais"></span>
            </div>
        </div>
        <div class="control-group" id="valTelefon">
            <label class="control-label" for="telefon">Telefon</label>
            <div class="controls">
                <input type="text" name="telf" id="telefon" value="<?php echo $_SESSION["proveidor"]->getTelf() ?>" onchange='validarTelefon($(this))'>
                <span class="help-inline" id="errTelefon"></span>
            </div>
        </div>
        <div class="control-group" id="valFax">
            <label class="control-label" for="fax">Fax</label>
            <div class="controls">
                <input type="text" name="fax" id="fax" value="<?php echo $_SESSION["proveidor"]->getFax() ?>" onchange='validarTelefon($(this))'>
                <span class="help-inline" id="errFax"></span>
            </div>
        </div>
        <div class="control-group" id="valWeb">
            <label class="control-label" for="web">Web site</label>
            <div class="controls">
                <input type="text" name="website" id="web" value="<?php echo $_SESSION["proveidor"]->getWebSite() ?>" onchange='validarWeb($(this))'>
                <span class="help-inline" id="errWeb"></span>
            </div>
        </div>
        <div class="control-group" id="valProducte">
            <div class="controls">
                <input type="button" value="Modificar" class="btn btn-primary" onclick="validarProveidor('modificar')">
            </div>
        </div>
    </form>
</div>
<?php
//unset($_SESSION['proveidor']);
include $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/footer.php";
?>
