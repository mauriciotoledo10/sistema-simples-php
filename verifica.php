<?php
//iniciando a sess�o
session_start();
 
 //se a sess�o for vazia
if (empty($_SESSION['id'])) 
{
 
    //neste caso levamos o utilizador para a p�gina de login
    header('Location: login.php');
    exit();
}
?> 