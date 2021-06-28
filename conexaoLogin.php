<?php
 
   $username = $_POST['username']; 
   $password = md5($_POST['password']);

   include 'conectar.php';
   $pdo = Conexao::conectar();
   $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "SELECT * FROM usuarios WHERE usuario LIKE ?";
   $query = $pdo->prepare($sql);
   $query->execute(array($username));
   
   $user = $query->fetch(PDO::FETCH_ASSOC);
   
   if($user == false){
   echo "OPS! Usuário ou senha incorretos";
   exit;
   }

   else{

   Conexao::desconectar();

    if ($user['senha']==$password){  

        session_start();
        $_SESSION['username'] = $username; 
        $_SESSION['nome'] = $user['nome'];
        
        Header("location:home.php");
   } 
   else echo "OPS! Usuário ou senha incorretos";
   }
?>