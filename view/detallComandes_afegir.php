<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/view/menu.php";
?>
		<div id="contenido" class="span8 offset2 hero-unit">
				<h2>Detall comandes</h2>
			    <form class="form-horizontal">
					<div class="control-group" id="valIdComanda">
						<label class="control-label" for="idComanda">Comanda</label>
						<div class="controls">
							<select name="idComanda" id="idComanda">
								<option value="0">Nothing</option>
							</select>							
							<span class="help-inline" id="errIdComanda"></span>
						</div>
					</div>
					<div class="control-group" id="valIdProducte">
						<label class="control-label" for="idProducte">Producte</label>
						<div class="controls">
							<select name="idProducte" id="idProducte">
								<option value="0">Nothing</option>
							</select>
							<span class="help-inline" id="errIdProducte"></span>
						</div>
					</div>
					<div class="control-group" id="valPreuUnitat">
						<label class="control-label" for="preuUnitat">Preu unitat</label>
						<div class="controls">
							<input type="text" name="preuUnitat" id="preuUnitat" placeholder="Preu unitat"  onchange='validarPrecio($(this))'> €
							<span class="help-inline" id="errPreuUnitat"></span>
						</div>
					</div>
					<div class="control-group" id="valQuantitat">
						<label class="control-label" for="quantitat">Quantitat</label>
						<div class="controls">
							<input type="text" name="quantitat" id="quantitat" placeholder="Quantitat"  onchange='validarCantidad($(this))'>
							<span class="help-inline" id="errQuantitat"></span>
						</div>
					</div>
					<div class="control-group" id="valDescompte">
						<label class="control-label" for="descompte">Descompte</label>
						<div class="controls">
							<input type="text" name="descompte" id="descompte" placeholder="Descompte"  onchange='validarDescuento($(this))'> %
							<span class="help-inline" id="errDescompte"></span>
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
include $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/view/footer.php";
?>
