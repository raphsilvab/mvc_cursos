<!doctype html>
<html>
	<head>
		<title>Sistemas mjailton</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "assets/"?>css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "assets/"?>css/auxiliar.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "assets/"?>css/grade.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE . "assets/"?>css/m-style.css">
		 
		<script type="text/javascript" src="<?php echo URL_BASE . "assets/"?>js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo URL_BASE . "assets/"?>js/js.js"></script>
		
	</head>
<body>
<div class="base-topo">
		<div class="conteudo">
			<a href="" class="menu-m">menu mobile esquerdo</a><!-- aqui fico icone reponsavel pelo meno da esquerda-->
			<a href="" class="menu-grade">menu mobile direito</a><!--aqui fica o menu responsavel pelo meno do topo-->
			<a href="" class="logo"></a>
			<div id="grade">
			<ul class="menu-topo">
				<li class="sub"><a href=""><i class="ico cursos"></i>Cursos</a>
					<ul>
						<li><a href="">Java</a></li>
						<li><a href="">PHP</a></li>
						<li><a href="">Lógica de programação</a></li>
						<li><a href="">Androind</a></li>
						<li><a href="">Delphi</a></li>
					</ul>
				</li>
				<li class="sub user"><a href="" class="thumb"><img src="<?php echo URL_BASE . "assets/"?>img/foto01.png"></a>
					<ul>
						<li><b>Manoel jailton</b><small><a href="">Sair</a></small></li>
					</ul>
				</li>
			</ul>
		</div>
		</div>
	</div>

<div id="menu">
			<div class="menu-lateral">
			<figure>
					<div class="thumb"><img src="<?php echo URL_BASE . "assets/" ?>img/foto01.png"></div>
					<figcaption>
						<strong>Manoel jailton</strong>
						<small>Em andamento</small>
					</figcaption>
			</figure>
			<ul>
					<li><a href="<?php echo URL_BASE; ?>"><i class="ico home"></i>HOME</a></li>
					<li><a href="<?php echo URL_BASE . "home/cursos" ?>"><i class="ico curso"></i>MEUS CURSOS</a></li>
					<li><a href="<?php echo URL_BASE . "home/perfil" ?>"><i class="ico perfil"></i>MEU PERFIL</a></li>
					<li><a href="<?php echo URL_BASE . "home/comentario" ?>"><i class="ico duvida"></i>COMENTÁRIOS</a></li>
					<li><a href="<?php echo URL_BASE . "home/login" ?>"><i class="ico sair"></i>SAIR</a></li>
			</ul>
					</div>
		</div>
</div>
		<?php $this->load($view, $viewArray); ?>	
</body>
</html>