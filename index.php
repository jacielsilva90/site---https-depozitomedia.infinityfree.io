<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
    <link rel="stylesheet" href="style2.css">
	<link rel="icon" href="favicon.ico">
	<style>
	#red_soc{display:grid; grid-template-columns:1fr 1fr 1fr;}
	@media(max-width:770px){
		#red_soc{display:grid; grid-template-columns:1fr 1fr;}
		#red_soc section{font-size:90%; overflow:hidden;}
		#red_soc section img{max-width:50%;height:auto;}
	}

	</style>
</head>
<body style="" >
    <header>
        <h1><a href="">site</a></h1>
        <p>Bem-vindo 🚀</p>
    </header>
    <nav>
        <ul>
            <li><a href="#" onclick="mostrarSecao('inicio')">Início</a></li>
            <li><a href="#" onclick="mostrarSecao('sobre')">Sobre</a></li>
            <li><a href="#" onclick="mostrarSecao('contato1')">Contato</a></li>
			<li><a href="#" onclick="mostrarSecao('login')">Login</a></li>
			<li><a href="#" onclick="mostrarSecao('registrar')">Registrar</a></li>
        </ul>
    </nav>
    <div class="container" >
        <main>
            <section id="inicio" class="secao">
                <h2>Bem-vindo!</h2>
            </section>
            <section id="sobre" class="secao oculto">
                <h2>Sobre</h2>
            </section>
			<section id="contato1" class="secao oculto" style="width:90%; " >
                <h3>Contato</h3>
				<button><a href="indexcontato.php">Pagina de contato</a></button><br/><br/> 
            </section>
            <section id="login" class="secao oculto">
                <h3>Login</h3>  <!-- $_SERVER["PHP_SELF"] servidor é php atual -->
				<button><a href="">Pagina de Login</a></button><br/><br/> 
            </section>
            <section id="registrar" class="secao oculto">																
				<h3>Criação de Conta</h3><br/>
				<button><a href="">Criar conta</a></button><br/><br/>
            </section>
			<hr/><br/>
			
			<h3>Pesquise o nome da peça ou a loja</h3>
			<p> - <a HREF="pecasListagem.php">Listagem de peça</a></p>
			<br/><a href="">Home</a>
			<br/><hr/><br/>
	
			<div class="col-md-4">
				<div class="card h-100">
					<img src="" class="card-img-top" alt="">
					<div class="card-body">
						<h3 class="card-title">Anuncie aqui</h3>
						<p class="card-text">..</p>
						<a href="#" class="btn btn-outline-primary"></a>
					</div>
				</div>
			</div>
			<h3 > > Redes Sociais:</h3>
			<div id='red_soc'>
				<section>
				 <img src='imageinsta.png' /><br/>
				 <a href="https://www.instagram.com/jacismith90/" target="_blank"> > @jacismith90</a><br/>							
				 <a href="https://www.instagram.com/jaciel.silva.18/" target="_blank"> > @jaciel.silva.18</a><br/>
				</section>
				<section>
				 <img src='imageface.png' /><br/>
				 <a href="https://www.facebook.com/jacielap.silvajaci?locale=pt_BR" target="_blank"> > Jaci AP Silva</a><br/>
				 <a href="https://www.facebook.com/Jacielsilvasmith?locale=pt_BR" target="_blank"> > Jaciel Silva Smith</a><br/>
				</section>
				
				<a href="https://mail.google.com/mail/u/0/#inbox"><img src='imagemail.png' /> > mail.com</a>
			</div>
		
        </main>
    </div>
    <footer>
        <p>&copy; <i id="anor"> </i></p>
    </footer>
    <script src="script2.js" defer></script>
</body>
</html>
