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
	
	<title>Menu Aluno</title>
	
	

	<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
	<!-- Bootstrap -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');  ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/font-awesome.css');  ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap-social.css');  ?>" rel="stylesheet">
	<script src="<?php echo base_url('assets/js/jquery.min.js');  ?>"></script>
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
		<img class="" src="<?php echo base_url('assets/img/aluno.png'); ?>">
		<p>
			Aluno
		</p>
	</div>
	<div class="Crud">
		<form class="navbar-form" action="<?php base_url()?>pesquisar">
				<div class="row">
					<div class="search">
						<input type="text" class="form-control" id="inputSearch" maxlength="64" placeholder="Procurar..." required/>
						<button type="submit" class="btnSearch btn btn-warning btn-sm"><span class="glyphicon glyphicon-search"></span></button>
					</div>
				</div>
		</form>

		<?php 
		$this->db->order_by("matricula", "asc");
		
		$query = $this->db->get('aluno');

		echo "<table class='table table-striped table-responsive'>";
		echo "<th>Matricula</th>
		<th>Nome</th>
		<th>CPF</th>
		<th>Sexo</th>
		<th>Turma</th>
		<th>Telefone</th>";?>
		<th><a id="myBtn" class="btn btn-success" href="<?php echo base_url('insert_view'); ?>"><span class="glyphicon glyphicon-plus"></span> Novo</a></th>
		<?php
		foreach ($query->result() as $row) {
			echo "<tr><td>".$row->matricula."</td>"
			."<td>".$row->nome."</td>"
			."<td>".$row->cpf."</td>"
			."<td>".$row->sexo."</td>"
			."<td>"." "."</td>"
			."<td>".$row->telefone."</td>";
			?>
			<td colspan="3">
				<a id="Visualizar" class="btn btn-info" title="Visualizar" href="#"><span class="glyphicon glyphicon-eye-open"></span> </a>
				<a id="Editar" class="btn btn-warning" title="Editar" href="#"><span class="glyphicon glyphicon-pencil"></span> </a>
				<a id="Excluir" class="btn btn-danger" title="Excluir" href="#"><span class="glyphicon glyphicon-trash"></span> </a>
			</td>
			<?php
		}
		?>

	</div>

</body>
</html>