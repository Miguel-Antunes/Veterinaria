<?php
include  'conectar.php';

if(isset( $_POST['nomeAnimal']))
$nomeAnimal = $_POST['nomeAnimal'];

if(isset( $_POST['veterinario']))
$veterinario = $_POST['veterinario'];

if(isset( $_POST['dataProc']))
$dataProc = $_POST['dataProc'];

if(isset( $_POST['group1']))
$dorAnimal = $_POST['group1'];

if(isset( $_POST['group2']))
$febreAnimal = $_POST['group2'];

if(isset( $_POST['group3']))
$estadoAnimal = $_POST['group3'];

if(isset( $_POST['queixa']))
$queixa = $_POST['queixa'];

if(isset( $_POST['procedimento']))
$procedimento = $_POST['procedimento'];

if (!empty($nomeAnimal) && !empty($veterinario) && !empty($dataProc) && !empty($dorAnimal) && !empty($febreAnimal) && !empty($estadoAnimal) && !empty($queixa) && !empty($procedimento)){
    $pdo = conexao::conectar(); 
   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO procedimento(dataproc, animal, veterinario, statusdor,statusfebre, statusestado, queixa, procedimento) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $query = $pdo->prepare($sql);
    $query->execute(array($dataProc,$nomeAnimal, $veterinario, $dorAnimal, $febreAnimal, $estadoAnimal, $queixa, $procedimento));
    Conexao::desconectar(); 
}
else echo "Preencha todos os dados!"; 

//header("location:insereProcedimento.php")
?>

