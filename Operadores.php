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
					<li><a href="Variaveis.php">Uso de Variaveis</a></li>
					<li>Operadores</li>
					<li><a href="Logica.php">Decisão Lógica</a></li>
					<li><a href="Rep.php">Laços de Repeticao</a></li>

					
					
				</ul>
			</div>
			
			<div class="principal">
			<?php	
			echo "<h2><center><b>Operadores Relacionais</b></h2>
			<p>Operadores Relacionais, são aqueles capazes de fazer comparações entre variáveis, com eles podemos saber se uma variável é maior que a outra, diferente e etc. 
			Veja abaixo os operadores de comparação e alguns exemplos:</p>";
			
			?>
			<center><img id="im1" src="./imagens/tabela op relacionais.png" alt=""><br><br>
			<center><img id="im1" src="./imagens/exemplo op. relacionais.png" alt="">

			<?php
			echo "<h3><center><b>Operadores Lógicos</b></center></h3>
			<p>Os operadores lógicos trabalham com valores booleanos, com o objetivo de avaliar expressões cujo valor pode ser verdadeiro ou falso, ou seja, implementando a lógica booleana.</p>";
		//fotos
				
			?>
			<center><img id="im1" src="./imagens/Op Logicos.png" alt="">
			<h1><b>Operadores Aritméticos:</b></h1>
			<p>Para aqueles que já conhecem outras linguagens, como por exemplo: o Java. Os operadores aritméticos são bem similares, mas mesmo para aqueles que não tem tanta experiência com linguagens de programação, os operadores são parecidos com os da matemática. Temos:</p>
			<ul class="operadores">
				<li><i>Adição ( + ):</i></li>
				<p>Soma dois ou mais números, mesmo que estes sejam naturais(inteiros) ou reais(float/double)</p>
				<center><p><b>Exemplo</b></p>
				<center><img src="./imagens/somaEx.png" alt="Exemplo Soma">
				<br>
				<li><i>Subtração ( - ):</i></li>
				<p>Subtrai Soma dois ou mais números, mesmo que sejam naturais(inteiros) ou reais(float/double)</p>
				<center><br><p><b>Exemplo</b></h1>
				<center><img src="./imagens/subEx.png" alt="Exemplo Subtração">
				<br>
				<li><i>Multiplicação ( * ):</i></li>
				<p>Multiplica dois ou mais números, mesmo que sejam naturais(inteiros) ou reais(float/double)</p>
				<center><p><b>Exemplo</b></p>
				<img src="./imagens/multEx.png" alt="Exemplo Multiplicação">
				<br>
				<li><i>Divisão ( / ):</i></li>
				<p>Divide dois ou mais números, mesmo que sejam naturais(inteiros) ou reais(float/double)</p>
				<center><p><b>Exemplo</b></p>
				<img src="./imagens/divEx.png" alt="Exemplo Divisão">
				<br>
				<li><i>Resto ( % ):</i></li>
				<p>O resto ou módulo, tem a forma de escrever semelhante às anteriores, porém ele funciona de forma diferente. Sempre que houver uma divisão, terá um resto ou o número que não pôde ser dividido, este número é o <u>resto.</u></p>
				<center><p><b>Exemplo</b></p>
				<img src="./imagens/restoEx.png" alt="Exemplo Resto">
				<br>
				<p><b>É UMA REGRA PARA TODO OPERADOR ARITMÉTICO, QUE A OPERAÇÃO ESTEJA DEPOIS DO SINAL DE IGUAL ( = )</b></p>
			</ul>
			</div>
			
			<a class = "link" href="./index.php">Voltar</a>
			<div class = "rodape">©|Todos os direiros reservados por Jéssica Rafaela & Leticia Araújo|2°Informatica(A)|<br>Instituto Federal de Hortolândia 
			
		</div>
		</div>
		
		
	</body>
</html>

