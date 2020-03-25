<!DOCTYPE html>
<html>
<head>
	<title>NodeShop - A tecnologia a click de você</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
	<header class="cabecalho">
		<h1 class="logo">
			<a href="index.php"></a>
		</h1>
		<form method="POST">
			<input type="text" placeholder="Faça uma busca" name="">
			<button><i class="fa fa-search fa-lg"></i></button>
		</form>
	</header>
	<nav class="menu">
		<ul>
			<li> <a href="#">Home</a> </li>
			<li> <a href="#">Produtos</a> </li>
			<li> <a href="#">Serviços</a> </li>
			<li> <a href="#">Contato</a> </li>
		</ul>
		<div class="social-icons">
			<a href="#" class="btn-facebook"> <i class="fa fa-facebook fa-lg"></i></a>
			<a href="#" class="btn-twitter"><i class="fa fa-twitter fa-lg"></i></a>
			<a href="#" class="btn-google"><i class="fa fa-linkedin fa-lg"></i></a>
		</div>
	</nav>
	<main class="principal">
		<article class="sobre">
			<h2>Sobre Nós</h2>
			<img src="img/loja.jpg" alt="NodeShop">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</article>
		<aside class="onde-estamos">
			<h2>Onde Estamos</h2>
			<p>
				Rua José Bonifácio - Centro, Andradina - SP
			</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.1631393155976!2d-51.379754299999995!3d-20.905755199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9490ca8f8ec84ab5%3A0x32e31d0646abecb4!2sR.%20Jos%C3%A9%20Bonif%C3%A1cio%2C%20Andradina%20-%20SP!5e0!3m2!1sen!2sbr!4v1582253952958!5m2!1sen!2sbr" width="280" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			<h2>Contatos</h2>
			<ul>
				<li> <i class="fa fa-phone fa-lg"></i> (18) 996806008</li>
				<li> <i class="fa fa-whatsapp fa-lg"></i> (18) 996806008</li>
				<li> <i class="fa fa-envelope fa-lg"></i> Lulinux2109@gmail.com</li>
			</ul>
		</aside>
	</main>
	<section class="newsletter">
		<h3> Newsletter </h3>
		<p> Receba nossas promoções por email</p>
		<form method="POST">
			<input type="text" name="nome" placeholder="Seu Nome">
			<input type="email" name="email" placeholder="Seu E-mail">
			<button type="submit" name="btn-enviar"> Cadastrar </button>
		</form>
	</section>
	<footer class="rodape">
		<p> &copy; Nodeshop - Todos os direitos reservados</p>
	</footer>
</body>
</html>