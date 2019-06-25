<html>
<body>
	<link id="css" rel="stylesheet" type="text/css" href="./css/estilo.css">
		<div class="site">
			<div class="logo">
				<img src="./imagens/logo.png" alt="logo" id="logo">
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="Caracteristicas.php">Caracteristicas</a></li>
					<li><a href="Imprime.php">Imprimir na Tela</a></li>
					<li>Uso de Variaveis</li>
					<li><a href="Operadores.php">Operadores</a></li>
					<li><a href="Logica.php">Decisão Lógica</a></li>
					<li><a href="Rep.php">Laços de Repeticao</a></li>
				</ul>
			</div>
			<div class="principal">
				<?php
					echo "<h1>Uso de Variáveis</h1>
					<p><center><b>O que é uma variavel na linguagem de programação?</b></center></p>
					<br>Uma variável é um recurso das linguagens de programação utilizado para armazenar valores em memória. 
					Assim, sempre que precisarmos desse valor, basta referenciarmos essa variável e obteremos o dado desejado."; //exemplos dos uso de variaveis
				?>	
				<center><img id="img2" src=".//criacao.png" alt="tipos"></center>
				<?php	
					echo "<p><b>Tipos de Variáveis em PHP</p></b>
					<p><b>String:</p></b>

					Uma string é um conjunto de caracteres de qualquer tipo. É o “vale tudo” da programação. 
					Qualquer coisa entra ali. Pode colocar letra, número, símbolo, enfim, aceita tudo. 

					<p><b>Inteiro:</p></b>

					Um inteiro é essencialmente um número, pode ser positivo ou negativo. 
					Um integer tem 8 bits, portanto tem um limite mínimo e um máximo.

					<p><b>Float ou dooble</p></b>

					Este é um outro tipo de variável que só aceita número. 
					Mas, diferentemente do tipo inteiro, aqui podemos colocar números com casas decimais.  
					Ele pode suportar até 14 casas decimais.  

					<p><b>Booleano:</p></b>

					Um valor booleano é a síntese do sistema binário. 
					O valor Booleano serve para determinar se algo é verdadeiro ou falso. 0 para falso e 1 para verdadeiro. 
					Diversas funções do php retornam booleanos. Eles normalmente são usados nos verificadores de condição if/else.<br>";
					
				?>
				<?php	
					echo "<p><center><b>Tipos de Variáveis em PHP</p></center></b>
					<p><b>String:</p></b>

					Uma string é um conjunto de caracteres de qualquer tipo. É o “vale tudo” da programação. 
					Qualquer coisa entra ali. Pode colocar letra, número, símbolo, enfim, aceita tudo. 

					<p><b>Inteiro:</p></b>

					Um inteiro é essencialmente um número, pode ser positivo ou negativo. 
					Um integer tem 8 bits, portanto tem um limite mínimo e um máximo.

					<p><b>Float ou dooble</p></b>

					Este é um outro tipo de variável que só aceita número. 
					Mas, diferentemente do tipo inteiro, aqui podemos colocar números com casas decimais.  
					Ele pode suportar até 14 casas decimais.  

					<p><b>Booleano:</p></b>

					Um valor booleano é a síntese do sistema binário. 
					O valor Booleano serve para determinar se algo é verdadeiro ou falso. 0 para falso e 1 para verdadeiro. 
					Diversas funções do php retornam booleanos. Eles normalmente são usados nos verificadores de condição if/else.<br>";
					
				?>
				<center><img id="img2" src="./imagens/tipos.png" alt="tipos"></center>
				<?php	
					echo "<p><center><b>Como declarar uma variável?</b></center></p>
					<p>Como a linguagem PHP é fracamente tipada, não é necessário informar o tipo de dado na declaração.
					<br><br>Sintaxe de declaração de variável:
					
					
					
					
					<p>Observe, basta escrever o símbolo $ seguido do nome desejado. O tipo da variável será determinado conforme seu uso, ou seja, caso receba um numero inteiro, será do tipo int.
					<br><br>Exemplos de declaração de variáveis:"; //declaracao de variaveis
					
					
				?>
		<div class="exemplo">
		<center><img id="img1" src="./imagens/var.png" alt="cri"></center>
		
		<h4><center><b>Regras na nomeação das variaveis</b></center></h4>
		
			Não iniciar o nome com números;
			Não utilizar espaços em branco;
			Não utilizar caracteres especiais, somente underline;
			Criar nomes relevantes para facilitar o entendimento do código;
			Devem ser declaradas em minúsculo. Caso sejam nomes compostos, a primeira letra de todas as palavras, menos da primeira, deve ser maiúscula (ex: dataAniversario) ou separe-as pelo caractere underline (ex.: data_Aniversario).
		</div>
		<div class="rodape">
		<p>Desenvolvido por Letícia Araújo e Jéssica Rafaela do 2º Informática</p>
		<p>01/04/2019</p>
		</div>
	</body>
</html>