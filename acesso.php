<?php

//damos in�cio a nossa sess�o, tanto p/ receber o post quanto p/ verificar se o usu�rio est� logado
session_start();

//quando o post for diferente de vazio (ou seja, se vier um request de login)
if (!empty($_POST)) 
{

    //estabeleceremos uma conex�o com o banco de dados
    mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db('usuarios');

    //recebendo os inputs do index.html
    $username = ($_POST['username']);
    $password = ($_POST['password']);
}

    //verificando o usu�rio atual
    $login = mysql_query("SELECT userid, username FROM users WHERE username = '$username' AND password = '$password' AND ativo = 's'");

    //se o usu�rio estiver corretamente validado, fa�a:
	if ($login && mysql_num_rows($login) == 1) 
	{

        $_SESSION['id'] = mysql_result($login, 0, 0);
        $_SESSION['username'] = mysql_result($login, 0, 1);

        echo "<p>Sess&atilde;o iniciada com sucesso como {$_SESSION['username']}</p>";

		//voltado pra index
        header ("location: index.php");
    } 
	else 
	{
        // falhou o login
        echo "senha ou usuario inv�lidos";
    }
?>