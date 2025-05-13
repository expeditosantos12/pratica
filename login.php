<?php 
if (isset($_GET['sucesso'])) {
  // verifica se há o parâmetro  'sucesso' na URL(ex:  login.php?sucesso=1)
 // se existir, mostra uma mensagem de sucesso
 echo  "<p style='color: green;'>conta criada com sucesso! faça login.</p>"; 
}
if (isset($_GET{'erro'})){
   // Verifica se há o parâmetro 'erro' na URL (ex: login.php?erro=senha)
   
   if ($_GET{'erro'} == 'senha'){
       // Se o erro for 'senha', mostra mensagem de erro para senha incorreta
       echo "<p style='color: red;' >Senha incorreta.</p>";
   } elseif ($_GET['erro'] == 'email') {
       // se o erro for 'email', mostra mensagem de erro para email não encontrado 
       echo "<p style='color: red; '>Email não encontrado.</p>";
    }
}
?>
<h2>Login</h2>
<!-- Título da página -->

<form action="process_login.php" method= "POST">
<!-- Início do formulário. Ao enviar, os dados irão para 'process_login.php' usando método POST -->

 Email: <input type=email name="email"  required><br><br>
 <!-- campo de entrada para o email.  obrigatório (required)  -->

 Senha: <input type="password"  name="senha" required><br><br>
 <!-- campo de entrada para a senha. os caracteres são ocultos. obrigatório -->

 <button type="submit">entrar</button>
 <!-- botão que envia o formulario para ser processado  -->
</form>
<!-- fim do formulário  -->

<p>não tem conta? <a href="register.php">criar conta</a></p>
<!-- Link para redirecionar à tela de cadastro caso o usuário ainda não tenha conta -->


   














