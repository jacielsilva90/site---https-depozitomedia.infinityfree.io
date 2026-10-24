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
				<h4>Contato</h4>
            </section>
            <section id="login" class="secao oculto">
                <h3>Login</h3>  <!-- $_SERVER["PHP_SELF"] servidor é php atual -->
				<button><a href="">Pagina de Login</a></button><br/><br/> 
            </section>
            <section id="registrar" class="secao oculto">																
				<h3>Criação de Conta</h3><br/>
				<button><a href="">Criar conta</a></button><br/><br/>
            </section><br/><hr/>
			
                <h4>Contato</h4>
				<div class="container">				
					<form id="contactForm">
						<input type="text" id="nomecontato" name="nomecontato" size="60" placeholder="Nome" required><br/>	
						<input type="email" id="emailcontato" name="emailcontato" size="60" placeholder="Email" required><br/>
						<textarea id="textcontato" name="textcontato" placeholder="Mensagem" cols="60%" rows="4" required></textarea><br/>
						<button type="submit" >Enviar</button>
					</form>
					<p id="feedback"> </p>
				</div>
				<br/><a href="">Home</a><br/>
				
			<hr/><br/>
			
			<h3>Pesquise o nome da peça</h3>
			<p> - <a HREF="pecasListagem.php">Listagem de peça</a></p>
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
			<div><br/>   
				<h3 > > Redes Sociais:</h3>
				<p >
				<img src="imageinsta.png">
				<a href="https://www.instagram.com/jacismith90/"> > @jacismith90</a>
				<img src="imageinsta.png">
				<a href="https://www.instagram.com/jaciel.silva.18/"> > @jaciel.silva.18</a>
				
				<img src="imageface.png">
				<a href="https://www.facebook.com/jacielap.silvajaci?locale=pt_BR"> > Jaci AP Silva</a>
				<img src="imageface.png">
				<a href="https://www.facebook.com/Jacielsilvasmith?locale=pt_BR"> > Jaciel Silva Smith</a>
				<br/>
				<img src="imagemail.png">
				<a href="https://mail.google.com/mail/u/0/#inbox"> > jaciel.silva.18@gmail.com</a>
				</p>
			</div>
		
        </main>
    </div>
    <footer>
        <p>&copy;<i id="anor"> </i></p>
    </footer>
    <script src="script2.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		/*O emailjs envia emails do frontend sem servidor. 
		A função emailjs.init() inicializa o SDK do EmailJS com sua Public Key. 
		Deve ser chamada no início do script antes de qualquer envio. */
		
		emailjs.init({ publicKey: '' });
		const formcontato=document.getElementById('contactForm')
		const feedback=document.getElementById('feedback')
		formcontato.addEventListener('submit', function(e){
			e.preventDefault();
			if (!document.getElementById('emailcontato').value.includes('@')){
				alert('insira @')
			};
			emailjs.sendForm('service_id', 'template_id', this) //this=#id_form
				.then(function(response){
					feedback.textContent='Enviado';
					console.log('SUCCESS!', response.status, response.text);
					formcontato.reset(); //limpa apos o envio
				}, function(error){
					console.log('erro', error);
					feedback.textContent='erro';
				});
		});
	</script>
</body>
</html>
