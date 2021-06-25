<?php

    $id = trim($_POST['cpfVet']); 
    
    include 'conectar.php';  

    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE from veterinario WHERE cpf=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar(); 

    header("location: listarVeterinario.php")

?>