<?php  
   include 'conectar.php';
    
   $id = $_POST['cpfVet'];
 
    $nomeVet = $_POST['nomeVet'];
    $nascimentoVet = $_POST['nascimentoVet'];
    $telefoneVet = $_POST['telefoneVet'];
    $enderecoVet = $_POST['enderecoVet'];
    $cidadeVet = $_POST['cidadeVet'];
    $ufVet = $_POST['ufVet'];

    if (!empty($nomeVet) &&  !empty($cidadeVet)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE veterinario SET nome=?, nascimento=?, telefone=?, endereco=?, cidade=?, UF=? WHERE cpf=?";
       $query = $pdo->prepare($sql);
         $query->execute(array($nomeVet, $nascimentoVet, $telefoneVet, $enderecoVet, $cidadeVet, $ufVet, $id));
       Conexao::desconectar(); 
    }
   else echo "Informe o nome,CPF e cidade do veterinário!"; 

header("location: listarVeterinario.php")
?>