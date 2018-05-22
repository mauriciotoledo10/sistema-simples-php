<?php
//iniciando a sessão
session_start();
 
 //se a sessão for vazia
if (empty($_SESSION['id'])) 
{
 
    //neste caso levamos o utilizador para a página de login
    header('Location: login.php');
    exit();
}
?> 