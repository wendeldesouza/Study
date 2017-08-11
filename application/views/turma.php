<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title>Menu Turma</title>
	
	<!-- Bootstrap -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');  ?>" rel="stylesheet">

	<link href="<?php echo base_url('assets/css/font-awesome.css');  ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap-social.css');  ?>" rel="stylesheet">

	<script src="<?php echo base_url('assets/js/bootstrap.min.js');  ?>"></script>
	<script src="<?php echo base_url('assets///code.jquery.com/jquery-3.2.1.min.js');  ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/func.js');  ?>"></script>
	<link href="<?php echo base_url('assets/css/style.css');  ?>" rel="stylesheet">
</head>
<body>

	<div class="exit">
		<a  class="btn" href="<?php echo base_url('');  ?>">
			<span class="glyphicon glyphicon-off"></span>
			Logout  
		</a>
	</div>
	
	
	<div class="IconPage">
		<img class="" src="<?php echo base_url('assets/img/turma.png'); ?>">
		<p>
			Turma
		</p>
	</div>
	<div class="Crud">
		<form role="search" class="navbar-form">
			<div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="Pesquisar Turma" id="Pesquisa" />
				<span id="pesquisaIcon" class="form-control-feedback glyphicon glyphicon-search"></span>
			</div>
		</form>
		<table class="table table-striped table-responsive">
			<th>Matricula</th>
			<th>Nome</th>
			<th>CPF</th>
			<th>Sexo</th>
			<th>Turma</th>
			<th>Telefone</th>
			<th colspan="3">
				<a id="myBtn" class="btn btn-success" href="#"><span class="glyphicon glyphicon-plus"></span> Novo</a>
			</th>
			<tr>
				<td>65655898</td>
				<td>Wendel</td>
				<td>123456789</td>
				<td>Feminino</td>
				<td>1º NA</td>
				<td>5858-9090</td>
				<td colspan="3">
					<a id="Visualizar" class="btn btn-sm btn-info" title="Visualizar" href="#"><span class="glyphicon glyphicon-eye-open"></span> </a>
					<a id="Editar" class="btn btn-sm btn-warning" title="Editar" href="#"><span class="glyphicon glyphicon-pencil"></span> </a>
					<a id="Excluir" class="btn btn-sm btn-danger" title="Excluir" href="#"><span class="glyphicon glyphicon-trash"></span> </a>
				</td>
			</tr>
			<tr>
				<td>65655898</td>
				<td>Wendel</td>
				<td>123456789</td>
				<td>Feminino</td>
				<td>1º NA</td>
				<td>5858-9090</td>
				<td colspan="3">
					<a id="Visualizar" class="btn btn-sm btn-info" title="Visualizar" href="#"><span class="glyphicon glyphicon-eye-open"></span> </a>
					<a id="Editar" class="btn btn-sm btn-warning" title="Editar" href="#"><span class="glyphicon glyphicon-pencil"></span> </a>
					<a id="Excluir" class="btn btn-sm btn-danger" title="Excluir" href="#"><span class="glyphicon glyphicon-trash"></span> </a>
				</td>
			</tr>
			<tr>
				<td>65655898</td>
				<td>Wendel</td>
				<td>123456789</td>
				<td>Feminino</td>
				<td>1º NA</td>
				<td>5858-9090</td>
				<td colspan="3">
					<a id="Visualizar" class="btn btn-sm btn-info" title="Visualizar" href="#"><span class="glyphicon glyphicon-eye-open"></span> </a>
					<a id="Editar" class="btn btn-sm btn-warning" title="Editar" href="#"><span class="glyphicon glyphicon-pencil"></span> </a>
					<a id="Excluir" class="btn btn-sm btn-danger" title="Excluir" href="#"><span class="glyphicon glyphicon-trash"></span> </a>
				</td>
			</tr>
			<tr>
				<td>65655898</td>
				<td>Wendel</td>
				<td>123456789</td>
				<td>Feminino</td>
				<td>1º NA</td>
				<td>5858-9090</td>
				<td colspan="3">
					<a id="Visualizar" class="btn btn-sm btn-info" title="Visualizar" href="#"><span class="glyphicon glyphicon-eye-open"></span> </a>
					<a id="Editar" class="btn btn-sm btn-warning" title="Editar" href="#"><span class="glyphicon glyphicon-pencil"></span> </a>
					<a id="Excluir" class="btn btn-sm btn-danger" title="Excluir" href="#"><span class="glyphicon glyphicon-trash"></span> </a>
				</td>
			</tr>
			
		</table>
	</div>

	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
				<h2>
					<img class="imgpro" src="<?php echo base_url('assets/img/turma.png'); ?>">
					Cadastro de Turma
				</h2>
			</div>
			<div class="modal-body">

				<div class="container">
					<div class="jumbotron">
						<form class="form">

							<p>Dados Pessoais:</p><hr>
							<div class="form-group">
								<input class="form-control" id="name" name="name" placeholder="Nome" type="text" required="">
							</div>
							<div class="form-group">
								<input class="form-control" id="matricula" name="matricula" placeholder="Matricula" type="text" required>
							</div>
							<div class="form-group">
								<input class="form-control" id="cpf" name="cpf" placeholder="Cpf" type="text" required>
							</div>
							<div class="form-group">
								<input class="form-control" id="rg" name="rg" placeholder="Rg" type="text" required>
							</div>
							<div class="form-group">
								<div class="form-inline" id="sexoDiv">
									Sexo: 
									<input class="form-control" id="sexoM" name="sexo" placeholder="Sexo" type="radio" value="Masc" checked required> Masculino
									<input class="form-control" id="sexoF" name="sexo" placeholder="Sexo" type="radio" value="Fem" required> Feminino
								</div>
								<div class="form-inline" id="dtNasc">
									Nascimento: 
									<input class="form-control" id="nasc" name="nasc" type="date" required>
								</div>
							</div>
							<div class="form-group">
								<input class="form-control" id="namem" name="namem" placeholder="Nome da Mãe" type="text" required>
							</div>
							<div class="form-group">
								<input class="form-control" id="namep" name="namep" placeholder="Nome do Pai" type="text" required>
							</div>

							<p>Endereço:</p><hr>
							<div class="form-group">
								<div class="form-inline">
									<input class="form-control" id="cep" name="CEP" type="text" placeholder="CEP" maxlength="8" required>
									<input class="form-control" id="rua" name="Rua" readonly="readonly" type="text" placeholder="Rua" required>
								</div>
							</div>
							<div class="form-group">
								<div class="form-inline">
									<input class="form-control" id="bairro" name="Bairro" readonly="readonly" type="text" placeholder="Bairro" required>
									<input class="form-control" id="cidade" name="Cidade" readonly="readonly" type="text" placeholder="Cidade" required>
									<input class="form-control" id="uf" name="uf" type="text" readonly="readonly" placeholder="UF" SIZE="1" required></input>
									<input class="form-control" id="telefone" name="telefone" maxlength="15" type="tel" placeholder="Telefone" required>
									<input class="form-control" id="email" name="email" type="email" placeholder="Email" required>
								</div>
							</div>

							<input id="btnSave" class="btn btn-success" type="submit" name="Salvar" value="Salvar">

						</form>
					</div>
				</div>
			</div>	

		</div>


		<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
	modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
</script>
</body>
</html>