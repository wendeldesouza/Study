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
	
	<title></title>
	
	

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

	<div id="mySidenav" class="sidenav ">
		<a title="Home" href="<?php echo base_url('menu'); ?>" id="Home"><img class="iconLogo" src="<?php echo base_url('assets/img/logo.png');  ?>"></a><br><br>
		<a href="<?php echo base_url('aluno');  ?>"><img class="iconMenu" src="<?php echo base_url('assets/img/aluno.png');  ?>"> Alunos</a>
		<a href="<?php echo base_url('turma');  ?>"><img class="iconMenu" src="<?php echo base_url('assets/img/turma.png');  ?>"> Turmas</a>
		<a href="<?php echo base_url('disciplina');  ?>"><img class="iconMenu" src="<?php echo base_url('assets/img/disc.png');  ?>"> Disciplinas</a>
		<a href="<?php echo base_url('professor');  ?>"><img class="iconMenu" src="<?php echo base_url('assets/img/prof.png');  ?>"> Professores</a>
	<!-- <a href="#"><img class="iconMenu" src="<?php echo base_url('assets/img/mensal.png');  ?>"> Mensalidade</a>
	<a href="#"><img class="iconMenu" src="img/notas.png"> Notas e Faltas</a> -->

	<div class="footer">
		<a title="Github" id="githubIcon" target="_blank" href="https://github.com/jackson12pk" class="btn btn-social-icon btn-github" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-github']);"><span class="fa fa-github"></span></a>
		<a title="LinkedIn" id="linkedinIcon" target="_blank" href="https://www.linkedin.com/in/jjnpereira" class="btn btn-social-icon btn-linkedin" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-linkedin']);"><span class="fa fa-linkedin"></span></a>
		<a title="Facebook" id="facebookIcon" target="_blank" class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><span class="fa fa-facebook"></span></a>
	</div>
</div>

</body>
</html>