<?php  
   include 'conectar.php';
    
   $id = $_POST['codanimal'];
   
   $nomeProp = trim($_POST['nomeProp']); 
   $cpfProp = trim($_POST['cpfProp']);
   $nascimentoProp = trim($_POST['nascProp']);
   $nomeAnimal = trim($_POST['nomeAnimal']);
   $especie = trim($_POST['especAnimal']);
   $raca = trim($_POST['racaAnimal']);
   $peso = trim($_POST['pesoAnimal']);

   if (!empty($nomeProp) && !empty($cpfProp) &&  !empty($nomeAnimal)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE animal SET nomeprop=?, cpfprop=?, nascimentoprop=?, nomeAnimal=?, especie=?, raca=?, peso=? WHERE codanimal=?";
       $query = $pdo->prepare($sql);
         $query->execute(array($nomeProp, $cpfProp, $nascimentoProp, $nomeAnimal, $especie, $raca, $peso, $id));
       Conexao::desconectar(); 
   }
   else echo "Informe o nome do animal,CPF e  nome do proprietário!"; 

header("location: listarAnimal.php")
?>