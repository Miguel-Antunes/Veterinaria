<?php
include 'conectar.php';
include 'autoriza.php';

$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT procedimento.idprontuario, veterinario.nome, animal.nomeanimal, procedimento.dataproc FROM procedimento INNER JOIN veterinario ON (procedimento.veterinario = veterinario.cpf) INNER JOIN animal ON (procedimento.animal = animal.codanimal) ORDER BY procedimento.idprontuario;";
$listaProc = $pdo->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/home.css">
    <title>Listar Procedimento</title>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
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
                    Logout (<?php echo $_SESSION['username'] ?>)
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
        <li><a href="./listarProcedimento.php" style="color: #00ACC1;">Listar Procedimento</a></li>
    </ul>

    <div class="container #fafafa grey lighten-5 z-depth-2">
        <div class=" #00acc1 cyan darken-1 col s12">
            <h4 class="center " style="color: white;">Listar Procedimento</h4>
        </div>

        <div class="row">
            <form action="cadastrarAnimal.php" method="POST" class="formulario s12">
                <div class="row">
                    <div>
                        <table class="responsive-table col offset-s2 s8 centered" style="border: 2px solid black;">
                            <thead>
                                <tr>
                                    <th>Prontuário</th>
                                    <th>Data</th>
                                    <th>Veterinário</th>
                                    <th>Nome do animal</th>
                                    <th>Editar/remover</th>

                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                foreach ($listaProc as $procedimento) {
                                ?>
                                    <tr>
                                        <td>
                                            <a onclick="JavaScript:location.href='visualizarProcedimento.php?idprontuario=' +
                                                <?php echo $procedimento[0]; ?>">
                                                <?php
                                                    echo $procedimento[0];
                                                ?>
                                            </a>
                                            </td>

                                        <td>
                                            <?php
                                            echo $procedimento[3];

                                            ?>

                                        </td>
                                        <td>
                                            <?php
                                            echo $procedimento[1];
                                            ?>

                                        </td>
                                        <td>
                                            <?php
                                            echo $procedimento[2];
                                            ?>
                                        </td>
                                        <td>
                                            <a class=" btn-small green" onclick="JavaScript:location.href='frmEditarProcedimento.php?idprontuario=' +
                                                <?php echo $procedimento[0]; ?>">Editar
                                            </a>

                                            <a class=" btn-small red" onclick="JavaScript:location.href='frmRmvProcedimento.php?idprontuario=' +
                                                <?php echo $procedimento[0]; ?>">Remover
                                            </a>

                                        </td>
                                    <?php } ?>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="./js/index.js"></script>
    </div>
</body>
</html>