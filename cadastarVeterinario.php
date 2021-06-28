<?php

include 'conectar.php';

$cpf = $_POST['cpfVet'];
$nome = $_POST['nomeVet'];
$nascimento = $_POST['nascimentoVet'];
$telefone = $_POST['telefoneVet'];
$endereco = $_POST['enderecoVet'];
$cidade = $_POST['cidadeVet'];
$uf = $_POST['ufVet'];

if (!empty($cpf) && !empty($nome) && !empty($cidade)){
    $pdo = conexao::conectar(); 
   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO veterinario (cpf, nome, nascimento, telefone, endereco, cidade, uf) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $query = $pdo->prepare($sql);
    $query->execute(array($cpf, $nome, $nascimento, $telefone, $endereco, $cidade, $uf));
    Conexao::desconectar(); 
}
else echo "Informe o CPF, nome e a cidade do Veterinário!"; 

header("location: listarVeterinario.php")

?>