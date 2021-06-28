<?php
include 'conectar.php';

$idProntuario = $_POST['idProntuario'];
$animal = $_POST['nomeAnimal'];
$veterinario = $_POST['veterinario'];
$dataProc = $_POST['dataProc'];
$dorAnimal = $_POST['group1'];
$febreAnimal = $_POST['group2'];
$estadoAnimal = $_POST['group3'];
$queixa = $_POST['queixa'];
$procedimento = $_POST['procedimento'];


if (!empty($animal) && !empty($veterinario) && !empty($dataProc) && !empty($dorAnimal) && !empty($febreAnimal) && !empty($estadoAnimal) && !empty($queixa) && !empty($procedimento)){
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE procedimento SET animal=?, veterinario=?, dataproc=?, statusdor=?, statusfebre=?, statusestado=?, queixa=?, procedimento=? WHERE idprontuario=?";
    $query = $pdo->prepare($sql);
      $query->execute(array($animal, $veterinario, $dataProc, $dorAnimal, $febreAnimal, $estadoAnimal, $queixa, $procedimento, $idProntuario));
    Conexao::desconectar(); 
}
else echo "Preencha todos os dados!"; 

header("location: listarProcedimento.php")

?>