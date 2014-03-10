
$(document).ready(function(){
	
});
 
function validarCamp(campo){
	var RegExPattern = /^[ñç\ \w]{1,20}$/;
	var errorMessage = 'Enter a tittle.';
	campo = campo.parent().parent();
	if(campo.find("input").val()==""){
		campo.attr('class','control-group');
		campo.find('span').html('');
		return false;
	}else if ((campo.find("input").val().match(RegExPattern)) && (campo.find("input").val()!='')) {
		campo.attr('class','control-group success');
		campo.find('span').html('Correct');
		return true;
	} else {
		campo.attr('class','control-group error');
		campo.find('span').html('Incorrect');
		campo.focus();
		return false;
	} 
}

function validarPrecio(campo){
    var RegExPattern = /(^\d*\.?\d*[0-9]+\d*$)|(^[0-9]+\d*\.\d*$)/;
    var errorMessage = 'Enter a tittle.';
    campo = campo.parent().parent();
    if(campo.find("input").val()==""){
        campo.attr('class','control-group');
        campo.find('span').html('');
        return false;
    }else if ((campo.find("input").val().match(RegExPattern)) && (campo.find("input").val()!='')) {
        campo.attr('class','control-group success');
        campo.find('span').html('Correct');
        return true;
    } else {
        campo.attr('class','control-group error');
        campo.find('span').html('Incorrect');
        campo.focus();
        return false;
    }
}

function validarCantidad(campo){
    var RegExPattern = /^\d{1,5}$/;
    var errorMessage = 'Enter a tittle.';
    campo = campo.parent().parent();
    if(campo.find("input").val()==""){
        campo.attr('class','control-group');
        campo.find('span').html('');
        return false;
    }else if ((campo.find("input").val().match(RegExPattern)) && (campo.find("input").val()!='')) {
        campo.attr('class','control-group success');
        campo.find('span').html('Correct');
        return true;
    } else {
        campo.attr('class','control-group error');
        campo.find('span').html('Incorrect');
        campo.focus();
        return false;
    }
}
function validarDescuento(campo){
    var RegExPattern = /^([1-9]{0,1})([0-9]{1})(\.[0-9])?$/;
    var errorMessage = 'Enter a tittle.';
    campo = campo.parent().parent();
    if(campo.find("input").val()==""){
        campo.attr('class','control-group');
        campo.find('span').html('');
        return false;
    }else if ((campo.find("input").val().match(RegExPattern)) && (campo.find("input").val()!='')) {
        campo.attr('class','control-group success');
        campo.find('span').html('Correct');
        return true;
    } else {
        campo.attr('class','control-group error');
        campo.find('span').html('Incorrect');
        campo.focus();
        return false;
    }
}


function validarTelefon(campo){
    var RegExPattern = /^\d{1,9}$/;
    var errorMessage = 'Enter a tittle.';
    campo = campo.parent().parent();
    if(campo.find("input").val()==""){
        campo.attr('class','control-group');
        campo.find('span').html('');
        return false;
    }else if ((campo.find("input").val().match(RegExPattern)) && (campo.find("input").val()!='')) {
        campo.attr('class','control-group success');
        campo.find('span').html('Correct');
        return true;
    } else {
        campo.attr('class','control-group error');
        campo.find('span').html('Incorrect');
        campo.focus();
        return false;
    }
}

function validarWeb(campo){
    var RegExPattern = /^(([\w]+:)?\/\/)?(([\d\w]|%[a-fA-f\d]{2,2})+(:([\d\w]|%[a-fA-f\d]{2,2})+)?@)?([\d\w][-\d\w]{0,253}[\d\w]\.)+[\w]{2,4}(:[\d]+)?(\/([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)*(\?(&amp;?([-+_~.\d\w]|%[a-fA-f\d]{2,2})=?)*)?(#([-+_~.\d\w]|%[a-fA-f\d]{2,2})*)?$/;
    var errorMessage = 'Enter a tittle.';
    campo = campo.parent().parent();
    if(campo.find("input").val()==""){
        campo.attr('class','control-group');
        campo.find('span').html('');
        return false;
    }else if ((campo.find("input").val().match(RegExPattern)) && (campo.find("input").val()!='')) {
        campo.attr('class','control-group success');
        campo.find('span').html('Correct');
        return true;
    } else {
        campo.attr('class','control-group error');
        campo.find('span').html('Incorrect');
        campo.focus();
        return false;
    }
}

function validarData(campo){
    var RegExPattern = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
    var errorMessage = 'Enter a tittle.';
    campo = campo.parent().parent();
    if(campo.find("input").val()==""){
        campo.attr('class','control-group');
        campo.find('span').html('');
        return false;
    }else if ((campo.find("input").val().match(RegExPattern)) && (campo.find("input").val()!='')) {
        campo.attr('class','control-group success');
        campo.find('span').html('Correct');
        return true;
    } else {
        campo.attr('class','control-group error');
        campo.find('span').html('Incorrect');
        campo.focus();
        return false;
    }
}

function validarClient(form){
    var nomCompanyia = $("#nomCompanyia");
    var nomContacte = $("#nomContacte");
    var adresa = $("#adresa");
    var ciutat = $("#ciutat");
    var codi = $("#codi");
    var pais = $("#pais");
    var telefon = $("#telefon");
    var fax = $("#fax");
    
    if((validarCamp(nomCompanyia)==true)&&(validarCamp(nomContacte)==true)&&(validarCamp(adresa)==true)&&(validarCamp(ciutat)==true)&&(validarCamp(pais)==true)&&(validarCantidad(codi)==true)&&(validarTelefon(telefon)==true)&&(validarTelefon(fax)==true)){
        if(form=="afegir"){
            afegirClient.submit();
        }else if(form=="modificar"){
            modificarClient.submit();
        }
        
        
    }else{
        alert("camps incorrectes");
    }  
}

function validarProducte(form){
    var nomProducte = $("#nomProducte");
    var preuUnitat = $("#preuUnitat");
    var unitatEnExistencia = $("#unitatEnExistencia");
    var unitatEnComanda = $("#unitatEnComanda");
    
    if((validarCamp(nomProducte)==true)&&(validarPrecio(preuUnitat)==true)&&(validarCantidad(unitatEnExistencia)==true)&&(validarCantidad(unitatEnComanda)==true)){
        if(form=="afegir"){
            afegirProducte.submit();
        }else if(form=="modificar"){
            modificarProducte.submit();
        }
    }else{
        alert("camps incorrectes");
    }  
}

function validarProveidor(form){
    var nomCompanyia = $("#nomCompanyia");
    var nomContacte = $("#nomContacte");
    var adresa = $("#adresa");
    var ciutat = $("#ciutat");
    var codi = $("#codi");
    var pais = $("#pais");
    var telefon = $("#telefon");
    var fax = $("#fax");
    var web = $("#web");
    
    if((validarCamp(nomCompanyia)==true)&&(validarCamp(nomContacte)==true)&&(validarCamp(adresa)==true)&&(validarCamp(ciutat)==true)&&(validarCamp(pais)==true)&&(validarCantidad(codi)==true)&&(validarTelefon(telefon)==true)&&(validarTelefon(fax)==true)&&(validarWeb(web)==true)){
        if(form=="afegir"){
            afegirProveidor.submit();
        }else if(form=="modificar"){
            modificarProveidor.submit();
        }
    }else{
        alert("camps incorrectes");
    }  
}