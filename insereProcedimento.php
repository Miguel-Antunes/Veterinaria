<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Compiled and minified CSS -->
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
        <li><a href="#">Procedimentos</a></li>
        <li><a href="./insereAnimal.php">Cadastrar Animal</a></li>
        <li><a href="./insereVeterinario.php">Cadastrar Veterinário</a></li>
        <li><a style="color: #00ACC1;" href="./insereProcedimento.php">Cadastrar Procedimento</a></li>
    </ul>


    <div class="container #fafafa grey lighten-5 z-depth-2">
        <div class=" #00acc1 cyan darken-1 col s12">
            <h4 class="center " style="color: white;">Procedimento</h4>
        </div>


        <div class="row">

            <form action="cadastrarAnimal.php" method="POST" class="formulario s12">

                <div class="row">
                    <div>

                        <fieldset class="col offset-s1 s10" style="border: 2px solid black;">
                            <legend style="text-align: center;">
                                Prontuário
                            </legend>



                            <div class="row">

                                <div class="input-field col offset-s3 s6">
                                    <input placeholder="Nome do Animal" name="pesoAnimal" type="text" class="validate">
                                    <label>Nome do Animal</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col offset-s3 s6">
                                    <input placeholder="Veterinário" name="pesoAnimal" type="text" class="validate">
                                    <label>Veterinário</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-field col offset-s3 s3    ">
                                    <input placeholder="Espécie" name="pesoAnimal" type="date" class="validate">
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
                                                <input class="with-gap" name="group3" type="radio" checked />
                                                <span>N/A</span>
                                            </label>

                                        </td>

                                        <td>
                                            <label>
                                                <input class="with-gap" name="group3" type="radio" checked />
                                                <span>Moderada</span>
                                            </label>

                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group3" type="radio" checked />
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
                                                <input class="with-gap" name="group3" type="radio" checked />
                                                <span>N/A</span>
                                            </label>

                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group3" type="radio" checked />
                                                <span>Moderada</span>
                                            </label>

                                        </td>

                                        <td>
                                            <label>
                                                <input class="with-gap" name="group3" type="radio" checked />
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
                                                <input class="with-gap" name="group3" type="radio" checked />
                                                <span>Tranquilo</span>
                                            </label>

                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group3" type="radio" checked />
                                                <span>Deprimido</span>
                                            </label>

                                        </td>
                                        <td>
                                            <label>
                                                <input class="with-gap" name="group3" type="radio" checked />
                                                <span>Agressivo</span>
                                            </label>

                                        </td>


                                    </tr>


                                </tbody>
                            </table>

                            <div class="row">

                                <div class="input-field col offset-s3 s6">
                                    <textarea id="textarea2" class="materialize-textarea" data-length="12"></textarea>
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

                            <label>Descrição

                                <textarea>

                        aaaaaaaaaa
                            aaaaaaaaaaa
                            aaaaaaaaaaa
                           
                        </textarea>


                            </label>

                        </fieldset>

                    </div>
                </div>

                <div class="row center">

                    <button class="btn-small" type="reset">Cancelar </button>
                    <button class="btn-small" type="submit">Salvar</button>


                </div>
            </form>

        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('input#input_text, textarea#textarea2').characterCounter();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>