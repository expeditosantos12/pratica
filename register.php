<h2> Criar conta</h2>
<!-- título da página exibido para o usuário -->

<form action= "process_register.php" method= "POST">
<!-- Início do formulário. Os dados serão enviados para 'process_register.php' via método' -->

 Nome: <input type= "text" name ="nome" required><br><br>
 <!-- Campo para o usuário digitar seu nome. Obrigatório (required) -->

 Email: <input type="email" name="email" required><br><br>
 <!-- Campo para o usuário digitar seu email. O navegador valida e formata o email. Obrigatório --> 

 Senha: <input type ="password" name="senha" required><br><br> 
 <!-- Campo para digitar a senha. O tipo "password" oculta os caracteres. Obrigatório -->

<button type="submit">Cadastrar</button> 
<!-- Botão que envia os dados do formulário ao clicar -->  
</form>
<!-- Fim do formulário --> 

<p> Já tem conta? <a href="login.php">Entrar</a></p>
<!-- Link para redirecionar à pagina de login, caso o usuário já tenha conta --> 