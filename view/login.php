<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/view/menu.php";
	if(isset($_GET["message"])){
		if($_GET["message"]==1){
?>
                    <div class="hero-unit">Logejat correctament</div>';
<?php
		}else{
?>
                    <div class="hero-unit">Usuari o contrasenya incorrecta</div>';
<?php
		}
	}
?>
		<div id="contenido" class="span8 offset2 hero-unit">
				<h2>Login</h2>
			<form class="form-horizontal" action="../controller/business/controller_login.php" method="post">
				<div class="control-group" id="valNomUsuari">
					<label class="control-label" for="nomUsuari">Nom d'usuari</label>
					<div class="controls">
						<input type="text" name="user" id="nomUsuari" placeholder="Usuari" onchange=''>
						<span class="help-inline" id="errNomUsuari"></span>
					</div>
				</div>
				<div class="control-group" id="valContrasenya">
					<label class="control-label" for="contrasenya">Contrasenya</label>
					<div class="controls">
						<input type="password" name="pass" id="contrasenya" placeholder="Contrasenya" onchange=''>
						<span class="help-inline" id="errContrasenya"></span>
					</div>
				</div>
				<div class="control-group" id="valProducte">
					<div class="controls">
						<input type="submit" value="Aceptar" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
<?php
include $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/view/footer.php";
?>
