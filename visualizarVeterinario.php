<?php
include 'conectar.php';
include 'autoriza.php';

$cpfVet = $_GET['cpf'];

$pdo = Conexao::conectar();

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM veterinario WHERE cpf=?;";
$query = $pdo->prepare($sql);
$query->execute(array($cpfVet));
$listaVet = $query->fetch(PDO::FETCH_ASSOC);

$nomeVet = $listaVet['nome'];
$nascimentoVet = $listaVet['nascimento'];
$telefoneVet = $listaVet['telefone'];
$enderecoVet = $listaVet['endereco'];
$cidadeVet = $listaVet['cidade'];
$ufVet = $listaVet['UF'];

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

    <title>Visualizar Veterinário</title>
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
            <h4 class="center " style="color: white;">Visualizar veterinário</h4>
        </div>

        <div class="row">
            <form action="RemoverVeterinario.php" method="POST" class="formulario s12">
                <div class="row">
                    <div>
                        <fieldset class="col offset-s1 s10" style="border: 2px solid black;">
                            <legend style="text-align: center;">
                                Veterinário
                            </legend>

                            <div class="row">
                                <div class="input-field col offset-s3 s6">
                                    <input placeholder="Nome" name="nomeVet" type="text"  value="<?php echo $nomeVet; ?>" readonly>
                                    <label>Nome </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col offset-s3 s3    ">
                                    <input placeholder="CPF" name="cpfVet" type="number"  value="<?php echo $cpfVet; ?>" readonly>
                                    <label>CPF</label>
                                </div>
                                <div class="input-field col s3">
                                    <input placeholder="Nascimento" name="nascimentoVet" type="date"  value="<?php echo $nascimentoVet; ?>" readonly>
                                    <label>Nascimento</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col offset-s3 s3    ">
                                    <input placeholder="Telefone" name="telefoneVet" type="tel" value="<?php echo $telefoneVet; ?>" readonly>
                                    <label>Telefone</label>
                                </div>


                            </div>
                            <div class="row">
                                <div class="input-field col offset-s3 s6    ">
                                    <input placeholder="Endereço" name="enderecoVet" type="text" value="<?php echo $enderecoVet; ?>" readonly>
                                    <label>Endereço</label>
                                </div>


                            </div>

                            <div class="row">
                                <div class="input-field col offset-s3 s3    ">
                                    <input placeholder="Cidade" name="cidadeVet" type="text" value="<?php echo $cidadeVet; ?>" readonly>
                                    <label>Cidade</label>
                                </div>
                                <div class="input-field col offset-s1 s2">
                                    <input placeholder="UF" name="ufVet" type="text" value="<?php echo $ufVet; ?>" readonly>
                                    <label>UF</label>
                                </div>

                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="./js/index.js"></script>
</body>
</html>