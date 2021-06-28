<?php
include 'conectar.php';
include 'autoriza.php';

$idProntuario = $_GET['idprontuario'];

$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM procedimento WHERE idprontuario=?;";
$query = $pdo->prepare($sql);
$query->execute(array($idProntuario));
$listaProcedimento = $query->fetch(PDO::FETCH_ASSOC);


$id = $listaProcedimento['idprontuario'];
$dataProcedimento = $listaProcedimento['dataproc'];
$codAnimal = $listaProcedimento['animal'];
$codVeterinario = $listaProcedimento['veterinario'];
$statusDor = $listaProcedimento['statusdor'];
$statusFebre = $listaProcedimento['statusfebre'];
$statusEstado = $listaProcedimento['statusestado'];
$queixa = $listaProcedimento['queixa'];
$procedimento = $listaProcedimento['procedimento'];


$sql = "SELECT * FROM veterinario ORDER BY nome ";
$listaVeterinario = $pdo->query($sql);

$sql = "SELECT * FROM animal ORDER BY nomeanimal";
$listaAnimal = $pdo->query($sql);

Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Cadastro Procedimento</title>
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
            <h4 class="center " style="color: white;">Procedimento</h4>
        </div>

        <div class="row">
            <form action="editarProcedimento.php" method="POST" class="formulario s12">

                <div class="row">
                    <div>
                        <fieldset class="col offset-s1 s10" style="border: 2px solid black;">
                            <legend style="text-align: center;">
                                Prontuário
                            </legend>
                            <div class="row">
                                <div class="input-field col s8">
                                    <input type="hidden" id="id" name="idProntuario" value="<?php echo $idProntuario; ?>">

                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col offset-s3 s6">
                                    <select name="nomeAnimal">
                                        <option value="" disabled>Selecione o animal </option>
                                        <?php foreach ($listaAnimal as $animal) { ?>

                                            <option value="<?php echo $animal['codanimal'] ?>" <?php if ($animal['codanimal'] == $codAnimal) {
                                              echo 'selected';
                                              } 
                                            ?>><?php echo $animal['nomeanimal'] ?> </option>

                                        <?php } ?>

                                    </select>
                                    <label>Nome do animal</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col offset-s3 s6">
                                    <select name="veterinario">
                                        <option value="" disabled>Selecione o veterinário </option>

                                        <?php foreach ($listaVeterinario as $veterinario) { ?>
                                            <option value="<?php echo $veterinario['cpf'] ?>" <?php if ($veterinario['cpf'] == $codVeterinario) {
                                                echo "selected";
                                                } ?>><?php echo $veterinario['nome'] ?></option>
                                        <?php } ?>

                                    </select>
                                    <label>Veterinário</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col offset-s3 s3    ">
                                    <input name="dataProc" type="date" class="validate" value="<?php echo $dataProcedimento ?>">
                                    <label style="width: 150px">Data Procedimento</label>
                                </div>
                            </div>

                            <table class="responsive-table col offset-s3 s6">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6>
                                                Dores
                                            </h6>
                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group1" type="radio" value="semDor" <?php if ($statusDor == "semDor") echo "checked"; ?> />
                                                <span>N/A</span>
                                            </label>

                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group1" type="radio" value="dorModerada" <?php if ($statusDor == "dorModerada") echo "checked"; ?> />
                                                <span>Moderada</span>
                                            </label>

                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group1" type="radio" value="dorIntensa" <?php if ($statusDor == "dorIntensa") echo "checked"; ?> />
                                                <span>Intensa</span>
                                            </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h6>
                                                Febre
                                            </h6>
                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group2" type="radio" value="semFebre" <?php if ($statusFebre == "semFebre") echo "checked"; ?> />
                                                <span>N/A</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group2" type="radio" value="febreModerada" <?php if ($statusFebre == "febreModerada") echo "checked"; ?> />
                                                <span>Moderada</span>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group2" type="radio" value="febreIntensa" <?php if ($statusFebre == "febreIntensa") echo "checked"; ?> />
                                                <span>Intensa</span>
                                            </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h6>
                                                Estado
                                            </h6>
                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group3" type="radio" value="estadoTranquilo" <?php if ($statusEstado == "estadoTranquilo") echo "checked"; ?> />
                                                <span>Tranquilo</span>
                                            </label>

                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group3" type="radio" value="estadoDeprimido" <?php if ($statusEstado == "estadoDeprimido") echo "checked"; ?> />
                                                <span>Deprimido</span>
                                            </label>

                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group3" type="radio" value="estadoAgressivo" <?php if ($statusEstado == "estadoAgressivo") echo "checked"; ?> />
                                                <span>Agressivo</span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row">
                                <div class="input-field col offset-s3 s6">
                                    <textarea id="textarea2" class="materialize-textarea" maxlength="150" name="queixa"><?php echo $queixa ?> </textarea>
                                    <label for="textarea2">Principais Queixas</label>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <div>
                        <fieldset class="col offset-s1 s10" style="border: 2px solid black;">
                            <legend style="text-align: center;">
                                Procedimento
                            </legend>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea" name="procedimento"> <?php echo $procedimento ?></textarea>
                                    <label for="textarea1">Procedimento e receita</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                <div class="row center">
                    <a href="listarProcedimento.php" class="btn-small" type="submit">Cancelar </a>
                    <button class="btn-small" type="submit">Salvar</button>


                </div>
            </form>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $('select').formSelect();
    </script>
    <script src="./js/index.js"></script>
</body>

</html>