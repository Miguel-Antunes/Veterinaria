<?php
include 'conectar.php';
include 'autoriza.php';


$codanimal = $_GET['codanimal'];

$pdo = Conexao::conectar();

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM animal WHERE codanimal=?;";
$query = $pdo->prepare($sql);
$query->execute(array($codanimal));
$listaAnimal = $query->fetch(PDO::FETCH_ASSOC);


$id = $listaAnimal['codanimal'];
$nomeProp = $listaAnimal['nomeprop'];
$cpfProp = $listaAnimal['cpfprop'];
$nascimento = $listaAnimal['nascimentoprop'];
$animal = $listaAnimal['nomeanimal'];
$especie = $listaAnimal['especie'];
$raca = $listaAnimal['raca'];
$peso = $listaAnimal['peso'];



Conexao::desconectar();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">



    <title>Editar Animal</title>
</head>

<body>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper #00acc1 cyan darken-1">
                <!-- Logo -->
                <a href="./home.php" class="brand-logo center">Pets</a>

                <!-- Ícone para abrir no Mobile -->
                <a href="#" data-target="mobile-navbar" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>

                <ul id="navbar-items" class="left hide-on-med-and-down">
                    <li><a href="./home.php">Home</a></li>
                    <li><a class="dropdown-trigger" data-target="dropdown-menu-listar" href="#">Consultas<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li>
                        <a class="dropdown-trigger" data-target="dropdown-menu" href="#">
                            Cadastros <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
                <a class="right" href="./logout.php" style="margin-right: 50px;">
               Logout (<?php echo $_SESSION['username']?>)
                </a>


                <!-- Dropdown -->
                <ul id="dropdown-menu" class="dropdown-content">
                    <li><a href="./insereAnimal.php">Cadastrar Animal</a></li>
                    <li><a href="./insereVeterinario.php">Cadastrar Veterinário</a></li>
                    <li class="divider"></li>
                    <li><a href="./insereProcedimento.php">Cadastrar Procedimento</a></li>
                </ul>
                <ul id="dropdown-menu-listar" class="dropdown-content">
                    <li><a href="./listarAnimal.php">Listar Animal</a></li>
                    <li><a href="./listarVeterinario.php">Listar Veterinário</a></li>
                    <li class="divider"></li>
                    <li><a href="./listarProcedimento.php">Listar Procedimento</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Menu Mobile -->
    <ul id="mobile-navbar" class="sidenav">
        <li><a href="./home.php">Home</a></li>
        <li><a href="./insereAnimal.php">Cadastrar Animal</a></li>
        <li><a href="./insereVeterinario.php">Cadastrar Veterinário</a></li>
        <li><a href="./insereProcedimento.php">Cadastrar Procedimento</a></li>
        <li class="divider"></li>
        <li><a href="./listarAnimal.php">Listar Animal</a></li>
        <li><a href="./listarVeterinario.php">Listar Veterinário</a></li>
        <li><a href="./listarProcedimento.php">Listar Procedimento</a></li>
    </ul>

    <div class="container #fafafa grey lighten-5 z-depth-2">
        <div class=" #00acc1 cyan darken-1 col s12">
            <h4 class="center " style="color: white;">Editar animal</h4>
        </div>
        <div class="row">

            <form action="editarAnimal.php" method="POST" class="formulario s12">
                <div class="row">
                    <div class="input-field col s8">
                        <input type="hidden" id="id" name="codanimal" value="<?php echo $id; ?>">

                    </div>

                </div>
                <div class="row">
                    <div>

                        <fieldset class="col offset-s1 s10" style="border: 2px solid black;">
                            <legend style="text-align: center;">
                                Animal
                            </legend>

                            <div class="row">
                                <div class=" col offset-s3 s6">
                                    <input type="text" class="validate" id="" name="nomeProp" value="<?php echo $nomeProp; ?>" required>
                                    <label>Nome do Proprietário </label>

                                </div>

                            </div>

                            <div class="row">
                                <div class="input-field col offset-s3 s3">
                                    <input placeholder="CPF" name="cpfProp" type="text" class="validate" value="<?php echo $cpfProp; ?>" required>
                                    <label>CPF</label>

                                </div>
                                <div class="input-field col s3">
                                    <input placeholder="Nascimento" name="nascProp" type="date" class="validate" value="<?php echo $nascimento; ?>">
                                    <label>Nascimento</label>

                                </div>

                            </div>


                            <div class="row">
                                <div class="input-field col offset-s3 s6">
                                    <input placeholder="Nome do Animal" name="nomeAnimal" type="text" class="validate" value="<?php echo $animal; ?>" required>
                                    <label>Nome do Animal</label>

                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col offset-s3 s3    ">
                                    <input placeholder="Espécie" name="especAnimal" type="text" class="validate" value="<?php echo $especie; ?>">
                                    <label>Espécie</label>
                                </div>
                                <div class="input-field col s3">
                                    <input placeholder="Raça" name="racaAnimal" type="text" class="validate" value="<?php echo $raca; ?>">
                                    <label>Raça</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col offset-s3 s3    ">
                                    <input placeholder="Peso do animal" name="pesoAnimal" type="number" class="validate" value="<?php echo $peso; ?>">
                                    <label>Peso</label>
                                </div>


                            </div>


                        </fieldset>

                    </div>
                </div>



                <div class="row center">

                    <a href="listarAnimal.php" class="btn-small " type="reset">Cancelar </a>
                    <button class="btn-small " type="submit">Salvar</button>


                </div>
            </form>

        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="./js/index.js"></script>
</body>
</html>