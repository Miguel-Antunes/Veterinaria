<?php

    $id = $_POST['idProntuario']; 

    
    include 'conectar.php';  

    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE from procedimento WHERE idprontuario=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    Conexao::desconectar(); 

    header("location: listarProcedimento.php")

?>