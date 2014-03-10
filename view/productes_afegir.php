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
    <form name="afegirProducte" class="form-horizontal" action="/ProjecteM7/controller/business/controller_producte.php?action=afegir" method="post">
        <div class="control-group" id="valProducte">
            <label class="control-label" for="nomProducte">Nom producte</label>
            <div class="controls">
                <input type="text" name="nomProducte" id="nomProducte" placeholder="Nom producte" onchange='validarCamp($(this))'>
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
                <input type="text" name="preuUnitat" id="preuUnitat" placeholder="Preu unitat" onchange='validarPrecio($(this))'> €
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group" id="valExistencies">
            <label class="control-label" for="existencies">Unitats en existència</label>
            <div class="controls">
                <input type="text" name="unitatEnExistencia" id="unitatEnExistencia" placeholder="Unitats en existència" onchange='validarCantidad($(this))'>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group" id="valUnitatsComanda">
            <label class="control-label" for="unitatsComanda">Unitats en comanda</label>
            <div class="controls">
                <input type="text" name="unitatEnComanda" id="unitatEnComanda" placeholder="Unitats en comanda" onchange='validarCantidad($(this))'>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <input type="button" value="Aceptar" class="btn btn-primary" onclick='validarProducte("afegir")'>
            </div>
        </div>
    </form>
</div>
<?php
include $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/footer.php";
?>
