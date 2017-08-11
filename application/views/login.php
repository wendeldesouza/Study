<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="pt-br"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Projeto</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styleL.css')  ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')  ?>" />
</head>
<body>
	<div class="container">
		<section id="content">
			<form action=""> 
				<h1>
					<img class="iconLogo" src="<?php echo base_url('assets/img/logo.png') ?> ">
				</h1>
				<div >
				</div>
				<div>
					<input type="text" placeholder="Username" required="" id="username" />
				</div>
				<div>
					<input type="password" placeholder="Password" required="" id="password" />
				</div>
				<div>
					<input type="submit" value="Log in" />
					<a href="#">Recuperar Senha</a>
				</div>
			</form><!-- form -->
		</section><!-- content -->
	</div><!-- container -->
</body>
</html>