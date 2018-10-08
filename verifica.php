<?php 
// Conexão com o banco de dados 
include("conexao.php");
 
// Inicia sessões 
session_start(); 
 
// Recupera o login 
$login = isset($_GET["login"]) ?$_GET["login"] : ""; 
// Recupera a senha, a criptografando em MD5 
$senha = isset($_GET["senha"]) ?$_GET["senha"] : ""; 
 
/** 
* Executa a consulta no banco de dados. 
* Caso o número de linhas retornadas seja 1 o login é válido, 
* caso 0, inválido. 
*/
$consulta = "SELECT * FROM Cliente WHERE login = '$login' and senha = '$senha' "; 
$con = $dao->query($consulta) or die("Erro no banco de dados!"); 

$dados = $con->fetch_array(); 

if ($dados != NULL) {
	$_SESSION["permissao"] = $dados["tipo"];
	$_SESSION["id_usuario"]= $dados["cpf"]; 
	$_SESSION["nome_usuario"] = $dados["nome"];

	echo $_SESSION["permissao"];
	echo $_SESSION["id_usuario"];
	echo $_SESSION["nome_usuario"];

	exit('<script>location.href = "listar_fun.php"</script>');
	
}else{
	exit('<script>location.href = "index.html"</script>');
}

session_destroy();
?>