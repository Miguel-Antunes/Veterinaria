<?php
include 'conectar.php';

$nomeProp = $_POST['nomeProp'];
$cpfProp = $_POST['cpfProp'];
$nascimentoProp = $_POST['nascProp'];
$nomeAnimal = $_POST['nomeAnimal'];
$especie = $_POST['especAnimal'];
$raca = $_POST['racaAnimal'];
$peso = $_POST['pesoAnimal'];

if (!empty($nomeProp) && !empty($cpfProp)){
    $pdo = conexao::conectar(); 
   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO animal(nomeprop, cpfprop, nascimentoprop, nomeanimal, especie, raca, peso) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $query = $pdo->prepare($sql);
    $query->execute(array($nomeProp,$cpfProp, $nascimentoProp, $nomeAnimal, $especie, $raca, $peso));
    Conexao::desconectar(); 
}
else echo "Informe o CPFe o nome do proprietário!"; 

header("location: home.php")
?>
