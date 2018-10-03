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
//$total = $dao->num_rows($con); 
 
 //$consulta = "SELECT * FROM Cliente WHERE login = '$login' and senha = '$senha'"; 
//$con = $dao->query($consulta) or die($dao->error);
//$total = $dao->num_rows($con);


// Caso o usuário tenha digitado um login válido o número de linhas será 1.. 
//if($total) 
// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 

$dados = $con->fetch_array(); 
 
// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
$_SESSION["permissao"] = $dados["tipo"];
$_SESSION["id_usuario"]= $dados["cpf"]; 
$_SESSION["nome_usuario"] = $dados["nome"];  


echo $_SESSION["permissao"];
echo $_SESSION["id_usuario"];
echo $_SESSION["nome_usuario"]; 

//chama a página de listar_fun.php
exit('<script>location.href = "listar_fun.php"</script>');
?>