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
    <h2>Productes</h2>
    <form name="modificarProducte" class="form-horizontal" action="/ProjecteM7/controller/business/controller_producte.php?action=modificar2&id=<?php echo $_SESSION["producte"]->getId() ?>" method="post">
        <div class="control-group" id="valProducte">
            <label class="control-label" for="nomProducte">Nom producte</label>
            <div class="controls">
                <input type="text" name="nomProducte" id="nomProducte" value="<?php echo $_SESSION["producte"]->getNomProducte() ?>" onchange='validarCamp($(this))'>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group" id="valProveidor">
            <label class="control-label" for="idProveidor">Proveidor</label>
            <div class="controls">
                <select name="proveidor">
                    <?php
                    $empresa = new Empresa();
                    $empresa->cargarProveidors();
                    $proveidors = $empresa->getProveidors();
                    foreach ($proveidors as $key => $proveidor) {
                    ?>
                        <option value="<?php echo $proveidor->getId() ?>"><?php echo $proveidor->getNomCompanyia() ?></option>
                    <?php    
                    }
                    ?>
                </select>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group" id="valPreuUnitat">
            <label class="control-label" for="preuUnitat">Preu unitat</label>
            <div class="controls">
                <input type="text" name="preuUnitat" id="preuUnitat" value="<?php echo $_SESSION["producte"]->getPreuUnitat() ?>" onchange='validarPrecio($(this))'> €
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group" id="valExistencies">
            <label class="control-label" for="existencies">Unitats en existència</label>
            <div class="controls">
                <input type="text" name="unitatEnExistencia" id="unitatEnExistencia" value="<?php echo $_SESSION["producte"]->getUnitatsEnExistencia() ?>" onchange='validarCantidad($(this))'>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group" id="valUnitatsComanda">
            <label class="control-label" for="unitatsComanda">Unitats en comanda</label>
            <div class="controls">
                <input type="text" name="unitatEnComanda" id="unitatEnComanda" value="<?php echo $_SESSION["producte"]->getUnitatsEnComanda() ?>" onchange='validarCantidad($(this))'>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <input type="button" value="Aceptar" class="btn btn-primary" onclick="validarProducte('modificar')">
            </div>
        </div>
    </form>
</div>
<?php
//unset($_SESSION['producte']);
include $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/footer.php";
?>
