<?php

    $id = trim($_POST['codanimal']); 

    include 'conectar.php';  

    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE from animal WHERE codanimal=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar(); 

    header("location: listarAnimal.php")

?>