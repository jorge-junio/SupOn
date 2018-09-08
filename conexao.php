<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="BD_SupOn";

$dao = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//verifica se houve erro durante a conexão com o banco de dados
if($dao->connect_error)
	echo "Falha na conexão: (".$dao->connect_error.") ".$dao->connect_error;

//$dao->close();
?>