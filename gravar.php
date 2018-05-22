<?php
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db('usuarios');
    //recebendo por metodo POST
    $username = $_POST['username'];
    $senha = $_POST['senha'];
    $confirma = $_POST['confirma'];
	//string "s", equivalente "sim", se for diferente de "s", o usuсrio estс impossibilitado de logar!
    $ativo = "s";
    $username = mysql_real_escape_string($_POST['username']);
    $senha = mysql_real_escape_string($_POST['senha']);
    $confirma = mysql_real_escape_string($_POST['confirma']);

    //verifica se jс existe um usuсrio com o mesmo nome
    $verifica = mysql_query("SELECT * FROM users WHERE username = '$username' ");
    $resultado = mysql_num_rows($verifica);
    //se houver um usuсrio com o mesmo nome   
    if ($resultado == 1) 
	{
    //imprime na tela a mensagem informando que o usuсrio jс existe
    echo "usuсrio existente";
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

     $query=mysql_query($sql) or die("Houve um erro na gravaчуo dos dados, verifique os valores passados");
	 //retorna pra index
     header("location: index.php"); 
     //caso as senhas nуo correspondam
     } 
	 else 
	 {
     //imprime na tela a mensagem que as senhas nуo correspondem
     echo "as senhas nуo correspondem";
     }
?>