<?php
$host = ''; 
$usuar = '';
$senhaa = '';
$bdi = '';
$conexao = new mysqli($host, $usuar, $senhaa, $bdi);
//$conn = new mysqli($host, $usuar, $senhaa, $bdi);
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
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
            </section><br/><hr/>
			<hr/><br/>
			
			<h3>Pesquise o nome da peça ou a loja</h3>
			<p> - <a HREF="pecasListagem.php">Listagem de peça</a></p>
			<br/><a href="">Home</a>
			<br/><hr/><br/>

<h2>Listagem de peças</h2>
<?php
$comando = "SELECT * FROM peca ORDER by nome_p;";
$resultado = MYSQLI_QUERY($conexao, $comando);
$qtdeRegistros = MYSQLI_NUM_ROWS($resultado);
if ($qtdeRegistros == 0) {
   ECHO("<p>Nenhum contato foi encontrado.</p>");
}
else {
    ECHO("<p>Quantidade: <B>$qtdeRegistros</B> contato(s) encontrado(s).</p>");
    $i = 1;
        ECHO("<table class='table table-bordered table-striped table-hover table-sm'>
        <TR>
	    <TH>Nome</TH>
	    <TH>loja</TH>
	    <TH>valor</TH>
	    </TR>");
    WHILE ($i <= $qtdeRegistros) {
      $campo = MYSQLI_FETCH_ARRAY ($resultado);
      $nome_p = $campo["nome_p"];
	  $loja = $campo["loja"];	  
	  $valor = $campo["valor"];
      ECHO("<TR>");
      ECHO("<TD>$nome_p</TD>
	  <TD>$loja</TD>
	  <TD>$valor</TD>
	  </TR>");
      $i = $i + 1;
    }
    ECHO("</table>"); 
}
ECHO("<p><a HREF=''>Home</a></p>"); 
@mysqli_close($conexao);
?>

	
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
        <p>&copy; <i id="anor"> </i></p>
    </footer>
    <script src="script2.js"></script>
</body>
</html>
