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
	
	<title>Cadastro de Aluno</title>
	
	

	<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
	<!-- Bootstrap -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');  ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/font-awesome.css');  ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap-social.css');  ?>" rel="stylesheet">
	<script src="<?php echo base_url('assets/js/jquery.min.js');  ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/func.js');  ?>"></script>
	<link href="<?php echo base_url('assets/css/style.css');  ?>" rel="stylesheet">

</head>
<body class="no-bg">
	<div class="exit">
		<a  class="btn" href="<?php echo base_url('');  ?>">
			<span class="glyphicon glyphicon-off"></span>
			Logout  
		</a>
	</div>
	
	<h2>
		<img class="imgcad" src="<?php echo base_url('assets/img/aluno.png'); ?>">
		Cadastro de Aluno
	</h2>

	<div class="container" >
		<div class="row">
			<div class="col-lg-12">
				<?php 	
				echo form_open('insert_ctrl');
				 echo form_error('nome');
				echo form_input(array('id' => 'nome', 'name' => 'nome','placeholder' => 'Nome Completo', 'class' =>'form-control'));
				 echo form_error('cpf');
				echo form_input(array('id' => 'cpf', 'name' => 'cpf','placeholder' => 'Numero do CPF', 'class' =>'form-control','maxlength'=>'11'));
				 echo form_error('rg');
				echo form_input(array('id' => 'rg', 'name' => 'rg','placeholder' => 'Numero do RG', 'class' =>'form-control','maxlength'=>'10'));?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="col-lg-auto">
					<?php
					 echo form_error('sexo');
					echo form_label('Sexo:');

					?>
				</div>
				<div class="col-lg-6 form-inline">
					<?php
					echo form_input(array('id' => 'sexoM', 'name' => 'sexo','type' => 'radio', 'class' =>'form-control', 'value' => 'Ma'));
					echo form_label('Masculino');
					?>
				</div>

				<div class="col-lg-6 form-inline">
					<?php
					echo form_input(array('id' => 'sexoF', 'name' => 'sexo','type' => 'radio', 'class' =>'form-control', 'value' => 'Fe'));
					echo form_label('Feminino');
					?>
				</div>
			</div>

			<div class="col-lg-auto">
				<?php 
				echo form_label('Nascimento:');
				?>
			</div>

			<div class="col-lg-4">

				<?php 
				 echo form_error('datanasc');
				echo form_input(array('id' => 'datanasc', 'name' => 'datanasc','type' => 'date', 'class' =>'form-control'));
				?>
			</div>
		</div>
		<div class="row">

			<div class="col-lg-12">
				<?php
				 echo form_error('nomemae');
				echo form_input(array('id' => 'nomemae', 'name' => 'nomemae','placeholder' => 'Nome da Mãe', 'class' =>'form-control'));
				 echo form_error('nomepai');
				echo form_input(array('id' => 'nomepai', 'name' => 'nomepai','placeholder' => 'Nome do Pai', 'class' =>'form-control'));
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<?php
				 echo form_error('telefone');
				echo form_input(array('id' => 'telefone', 'name' => 'telefone','placeholder' => '(xx) xxxxx-xxxx', 'class' =>'form-control','maxlength'=>'15'));
				?>
			</div>
			<div class="col-lg-8">
				<?php
				 echo form_error('email');
				echo form_input(array('id' => 'email', 'name' => 'email','placeholder' => 'Email do Aluno', 'class' =>'form-control'));
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<?php
				 echo form_error('cep');
				echo form_input(array('id' => 'cep', 'name' => 'cep','placeholder' => 'CEP Ex.: 00000000', 'class' =>'form-control','maxlength'=>'8'));
				?>
			</div>
			<div class="col-lg-8">

				<?php
				 echo form_error('rua');
				echo form_input(array('id' => 'rua', 'name' => 'rua','placeholder' => 'Rua', 'class' =>'form-control','readonly'=>'readonly'));
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">

				<?php
				 echo form_error('bairro');
				echo form_input(array('id' => 'bairro', 'name' => 'bairro','placeholder' => 'Bairro', 'class' =>'form-control','readonly'=>'readonly'));
				?>
			</div>
			<div class="col-lg-6">
				<?php
				 echo form_error('cidade');
				echo form_input(array('id' => 'cidade', 'name' => 'cidade','placeholder' => 'Cidade', 'class' =>'form-control','readonly'=>'readonly'));
				?>
			</div>
			<div class="col-lg-2">
				<?php
				 echo form_error('uf');
				echo form_input(array('id' => 'uf', 'name' => 'uf','placeholder' => 'UF', 'class' =>'form-control','readonly'=>'readonly'));
				?>
			</div>

			<?php
			echo form_submit(array('id'=> 'btnSave', 'name'=>'enviar', 'value'=>'Enviar','class'=>'btn btn-success'));
			echo form_close();
			?>
		</div>
	</div>
</div>

</body>
</html>