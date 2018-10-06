<?php

header("Access-Control-Allow-Origin:*");#PERMITIR ACESSO AO SEU PROGRAMA
include_once "config.php";//incluindo uma pagina na outra

if (isset($_POST)) {
	$tipo = $_POST['tipo'];
	if ($tipo == "pesquisa") {
		$sql = "SELECT * FROM mensagens";//fazendo uma clausula SQL
		$sqlExecuta = mysqli_query($conexao, $sql);//executando uma clausula SQL
		while($resultado = mysqli_fetch_assoc($sqlExecuta)){//pegando o valor retornado pela clausula SQL
			$vetor[] = array_map("utf8_encode", $resultado);//colocando esses valores dentro de um vetor
		} 

		echo json_encode($vetor);//passando os valores no formato json
		}
		if ($tipo == "cad") {
			$mensagem = $_POST['mensagem'];//dando valor a uma variave

			$sql = "INSERT INTO mensagens VALUES(0, '$mensagem')";//fazendo uma clausula SQL
			$resultado = mysqli_query($conexao, $sql);//executando uma clausula SQL	
		}
}
	
	





		
?>