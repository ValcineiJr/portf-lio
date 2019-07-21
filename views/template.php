<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/template.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/styles.css">
	<script src="https://kit.fontawesome.com/70806defb0.js"></script>
	<meta charset="utf-8">
	<title>Meu template</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark">
	<div class="container">
		<a href="#" class="navbar-brand">Valcinei Junior</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav mr-auto mx-lg-5">
				<li class="nav-item active">
					<a href="#" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Sobre</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Contato</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link"><i class="fab fa-github-alt"></i></a>
				</li>
		</ul>
		</div>
	</div>
</nav>

<div class="container">
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		
</div>

<div class="container">
	<h1>Rodapé</h1>		
</div>


<script src="<?php echo BASE; ?>assets/js/jquery.min.js"></script>
<script src="<?php echo BASE; ?>assets/js/popper.min.js"></script>
<script src="<?php echo BASE; ?>assets/js/bootstrap.min.js"></script>
</body>
</html>