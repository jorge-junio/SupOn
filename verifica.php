
<html>
    <head>
        <meta charset="UTF-8">
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css">
        <title>SupOn</title>
        <style type="text/css">
            html{
                min-height: 100%;
                background-image: linear-gradient(to bottom, rgba(25,25,25, 0.85), rgba(220,220,220, 0.85));
            }

            .forms {
                margin-top: 10%;
            }
        </style>
    </head>
    <body>



        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

    </body>
</html>

<?php 
	// Conexão com o banco de dados 
	include("DAO/conexao.php");
	 
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

	$conexao = new conexao();
	$consulta = "SELECT * FROM Cliente WHERE login = '$login' and senha = '$senha' "; 
	$con = $conexao->conecta()->query($consulta) or die("Erro no banco de dados!"); 

	$dados = $con->fetch_array(); 

	if ($dados != NULL) {
		$_SESSION["permissao"] = $dados["tipo"];
		$_SESSION["id_usuario"]= $dados["cpf"]; 
		$_SESSION["nome_usuario"] = $dados["nome"];

		exit('<script>location.href = "view/adm/listar_fun.php"</script>');
		
	}else{
		exit('<script>location.href = "index.html"</script>');
	}

	session_destroy();
?>