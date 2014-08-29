function validaLogin(form){
	if(form.txtLogin.value == ''){
		alert("Informe o login para acessar a ferramenta!");
		form.txtLogin.focus();
		return(false);
	}
	
	if(form.txtSenha.value == ''){
		alert("Informe a senha para acessar a ferramenta!");
		form.txtSenha.focus();
		return(false);
	}
	
	return(true);
}

function validaCadastro(form){
	if(form.txtNome.value == ''){
		alert("Informe o nome do novo usuario!");
		form.txtNome.focus();
		return(false);
	}
	
	if((form.cboDia.value == '') || (form.cboMes.value == '') || (form.cboAno.value == '')){
		alert("Informe a data de nascimento corretamente!");
		form.cboDia.focus();
		return(false);
	}
	
	if(form.txtEmail.value == ''){
		alert("Informe o e-mail do novo usuario!");
		form.txtEmail.focus();
		return(false);
	}
	
	if(form.txtLoginEsc.value == ''){
		alert("Informe o login do novo usuario!");
		form.txtLoginEsc.focus();
		return(false);
	}
	
	if(form.txtSenhaEsc.value == ''){
		alert("Informe a senha do novo usuario!");
		form.txtSenhaEsc.focus();
		return(false);
	}
	
	if(form.txtSenhaEscConfirm.value == ''){
		alert("Confirme a senha do novo usuario!");
		form.txtSenhaEscConfirm.focus();
		return(false);
	}
	
	if(form.txtSenhaEsc.value != form.txtSenhaEscConfirm.value){
		alert("Confirmacao de senha diferente da informada no campo Senha!");
		form.txtSenhaEscConfirm.focus();
		return(false);
	}
	
	return(true);
	
}

function validaSenha(form){
	if(form.txtAntiga.value == ''){
		alert("Informe a senha antiga!");
		form.txtAntiga.focus();
		return(false);
	}
	
	if(form.txtNova.value == ''){
		alert("Informe a nova senha!");
		form.txtNova.focus();
		return(false);
	}
	
	if(form.txtRenova.value == ''){
		alert("Repita a nova senha!");
		form.txtRenova.focus();
		return(false);
	}
	
	if(form.txtNova.value != form.txtRenova.value){
		alert("A repeticao da senha nao confere com a nova senha!");
		form.txtRenova.focus();
		return(false);
	}
	
	var continua = confirm("Confirma as informacoes e deseja continuar?");
	
	if(continua){
		return(true);
	}else{
		return(false);
	}
}
