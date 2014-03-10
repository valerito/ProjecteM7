<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/menu.php";
if (isset($_POST["destinatari"])) {
    try {
        if (validarComanda($_POST["adresaDestinatari"], $_POST["ciutatDestinatari"], $_POST["codiPostal"], $_POST["dataComanda"], $_POST["dataEntrega"], $_POST["dataEnviament"], $_POST["destinatari"], $_POST["paisDestinatari"])) {
            $_SESSION['comandes'][] = new Comanda($llistaClients[$_POST["idClient"]], $_POST["adresaDestinatari"], $_POST["ciutatDestinatari"], $_POST["codiPostal"], $_POST["dataComanda"], $_POST["dataEntrega"], $_POST["dataEnviament"], $_POST["destinatari"], $_POST["formaEnviament"], $_POST["paisDestinatari"]);
            echo "<div class='hero-unit'>La comanda s'ha realitzat correctament</div>";
        } else {
            echo '<div class="hero-unit">Error en la validació</div>';
        }
    } catch (Exception $ex) {
        echo '<div class="hero-unit">Error al afegir la comanda</div>';
    }
}
?>
<div id="contenido" class="span8 offset2 hero-unit">
    <h2>Comandes</h2>
    <form class="form-horizontal" action="comandes_afegir.php" method="post">
        <div class="control-group" id="valNomCompanyia">
            <label class="control-label" for="idClient">Client</label>
            <div class="controls">
                <select name="idClient" id="idClient">
                    <?php
                    foreach ($llistaClients as $key => $client) {
                        echo '<option value="' . $key . '">' . $client->getNomContacte() . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="control-group" id="valNomCompanyia">
            <label class="control-label" for="dataComanda">Data comanda</label>
            <div class="controls">
                <input type="text" name="dataComanda" id="dataComanda" placeholder="Data comanda" onchange='validarData($(this))'>
                <span class="help-inline" id="errNomCompanyia"></span>
            </div>
        </div>
        <div class="control-group" id="valNomCompanyia">
            <label class="control-label" for="dataEntrega">Data entrega</label>
            <div class="controls">
                <input type="text" name="dataEntrega" id="dataEntrega" placeholder="Data entrega" onchange='validarData($(this))'>
                <span class="help-inline" id="errNomCompanyia"></span>
            </div>
        </div>
        <div class="control-group" id="valNomCompanyia">
            <label class="control-label" for="dataEnviament">Data enviament</label>
            <div class="controls">
                <input type="text" name="dataEnviament" id="dataEnviament" placeholder="Data enviament" onchange='validarData($(this))'>
                <span class="help-inline" id="errNomCompanyia"></span>
            </div>
        </div>
        <div class="control-group" id="valNomCompanyia">
            <label class="control-label" for="formaEnviament">Forma enviament</label>
            <div class="controls">
                <select name="formaEnviament" id="formaEnviament">
                    <option value="0">Nothing</option>
                </select>
                <span class="help-inline" id="errNomCompanyia"></span>
            </div>
        </div>
        <div class="control-group" id="valDestinatari">
            <label class="control-label" for="destinatari">Destinatari</label>
            <div class="controls">
                <input type="text" name="destinatari" id="destinatari" placeholder="Destinatari" onchange='validarCamp($(this))'>
                <span class="help-inline" id="errDestinatari"></span>
            </div>
        </div>
        <div class="control-group" id="valAdresaDestinatari">
            <label class="control-label" for="adresaDestinatari">Adreça destinatari</label>
            <div class="controls">
                <input type="text" name="adresaDestinatari" id="adresaDestinatari" placeholder="Adreça destinatari" onchange='validarCamp($(this))'>
                <span class="help-inline" id="errAdresaDestinatari"></span>
            </div>
        </div>
        <div class="control-group" id="valCiutatDestinatari">
            <label class="control-label" for="ciutatDestinatari">Ciutat destinatari</label>
            <div class="controls">
                <input type="text" name="ciutatDestinatari" id="ciutatDestinatari" placeholder="Ciutat destinatari" onchange='validarCamp($(this))'>
                <span class="help-inline" id="errCiutatDestinatari"></span>
            </div>
        </div>
        <div class="control-group" id="valCodiPostal">
            <label class="control-label" for="codiPostal">Codi postal destinatari</label>
            <div class="controls">
                <input type="text" name="codiPostal" id="codiPostal" placeholder="Codi postal destinatari" onchange='validarCantidad($(this))'>
                <span class="help-inline" id="errCodiPostal"></span>
            </div>
        </div>
        <div class="control-group" id="valPaisDestinatari">
            <label class="control-label" for="paisDestinatari">Pais destinatari</label>
            <div class="controls">
                <input type="text" name="paisDestinatari" id="paisDestinatari" placeholder="Pais destinatari" onchange='validarCamp($(this))'>
                <span class="help-inline" id="errPaisDestinatari"></span>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <input type="submit" value="Aceptar" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
<?php
include $_SERVER["DOCUMENT_ROOT"] . "/ProjecteM7/view/footer.php";
?>
