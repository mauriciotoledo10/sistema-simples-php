<?php
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db('usuarios');
    //recebendo por metodo POST
    $username = $_POST['username'];
    $senha = $_POST['senha'];
    $confirma = $_POST['confirma'];
	//string "s", equivalente "sim", se for diferente de "s", o usu�rio est� impossibilitado de logar!
    $ativo = "s";
    $username = mysql_real_escape_string($_POST['username']);
    $senha = mysql_real_escape_string($_POST['senha']);
    $confirma = mysql_real_escape_string($_POST['confirma']);

    //verifica se j� existe um usu�rio com o mesmo nome
    $verifica = mysql_query("SELECT * FROM users WHERE username = '$username' ");
    $resultado = mysql_num_rows($verifica);
    //se houver um usu�rio com o mesmo nome   
    if ($resultado == 1) 
	{
    //imprime na tela a mensagem informando que o usu�rio j� existe
    echo "usu�rio existente";
   }
     //verifica se as senhas correspondem
    else if ($senha == $confirma) 
	{
    //se as senhas corresponderem insere no banco de dados
    $sql="
    INSERT INTO users(
    username, password, ativo)
    VALUES(
    '$username', '$senha', '$ativo')";

     $query=mysql_query($sql) or die("Houve um erro na grava��o dos dados, verifique os valores passados");
	 //retorna pra index
     header("location: index.php"); 
     //caso as senhas n�o correspondam
     } 
	 else 
	 {
     //imprime na tela a mensagem que as senhas n�o correspondem
     echo "as senhas n�o correspondem";
     }
?>