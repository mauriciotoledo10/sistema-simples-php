<html>
<head>
<title>Cadastrando novo usuário - Desenvolvido por Mauricio Oliveira</title>
</head>
<body>
<form name="cadastro" action="gravar.php" method="POST">
<p>Login:  
    <label>
    <input name="username" type="text"/>
    </label>
  </p>
  <p>Escolha uma senha   
    <label>
    <input name="senha" type="password"/>
    </label>
  </p>
  <p>Confirme sua senha   
    <label>
    <input name="confirma" type="password"/>
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="cadastrar" />
    </label>
</p>
</form>
Já tem cadastro? <a href="login.php">Faça Login</a>
</body>
</html>