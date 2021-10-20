<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Remédio Fácil</title>
		<!--META TAGS-->
		<meta charset="utf-8"/>
		<meta name="author" content="Samuel VSS"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Remédio Fácil é a nova maneira de encontrar os medicamentos que você busca."/>
		<meta name="keywords" content="remédio facil, remedio, facil, medicamentos, dipirona, saúde, farmácia, procurar remédio, buscar remédio"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!--ADICIONAR SCRIPT GOOGLE ANALYTICS-->

		<link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/style.css"/>
	</head>
	<body>
		<header id="header">
			<div class="container">
				<div class="logo">
					<h2>Remédio Fácil</h2>
				</div>
				<nav id="menu">
					<ul>
						<li>
							<a href="<?php echo BASE_URL;?>" class="active">Home</a>
						</li>
						<li>
							<a href="<?php echo BASE_URL;?>/about">Sobre Nós</a>
						</li>
						<li>
							<a href="<?php echo BASE_URL;?>/app">Nosso Aplicativo</a>
						</li>
						<li>
							<a href="<?php echo BASE_URL;?>/partnership">Seja nosso parceiro</a>
						</li>
					</ul>
				</nav>

				<div class="btn-cta">
					<div class="cta">
						<a href="<?php echo BASE_URL;?>">Entrar</a>
					</div>
				</div>
			</div>
		</header>

		<?php $this->loadViewInTemplate($viewName, $viewData);?>
		
		<footer id="footer">
			<div class="container">
				<div class="footer--area">
					<div class="footer--title">
						<h3>Institucional</h3>
					</div>
					<div class="footer--content">
						<ul>
							<li>
								<a href="<?php echo BASE_URL;?>">Política de Privacidade</a>
							</li>
							<li>
								<a href="<?php echo BASE_URL;?>">Parcerias</a>
							</li>
							<li>
								<a href="<?php echo BASE_URL;?>">Remédio Fácil e você</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer--area">
					<div class="footer--title">
						<h3>Mapa do site</h3>
					</div>
					<div class="footer--content">
						<ul>
							<li>
								<a href="<?php echo BASE_URL;?>">Home</a>
							</li>
							<li>
								<a href="<?php echo BASE_URL;?>">Sobre nós</a>
							</li>
							<li>
								<a href="<?php echo BASE_URL;?>">Nosso app</a>
							</li>
							<li>
								<a href="<?php echo BASE_URL;?>">Seja nosso parceiro</a>
							</li>
							<li>
								<a href="<?php echo BASE_URL;?>">Entrar</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer--area">
					<div class="footer--title">
						<h3>Contato</h3>
					</div>
					<div class="footer--content">
						<ul>
							<li>
								atendimento@remediofacil.com.br
							</li>
						</ul>
					</div>
				</div>
				<div class="footer--area">
					<div class="footer--title">
						<h3>Redes sociais</h3>
					</div>
					<div class="footer--content">
						<ul>
							<li>
								<a href="<?php echo BASE_URL;?>">Facebook</a>
							</li>
							<li>
								<a href="<?php echo BASE_URL;?>">Instagram</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/script.js"></script>
	</body>
</html>