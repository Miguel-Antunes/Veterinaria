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
                    <li><a href="#">Consultar procedimentos</a></li>
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
            </div>
        </nav>
    </div>

    <!-- Menu Mobile -->
    <ul id="mobile-navbar" class="sidenav">
        <li><a  href="./home.php">Home</a></li>
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



                            <div class="input-field col offset-s3 s3">
                                <input placeholder="Id do Prontuário" name="nomeAnimal" type="number" class="validate">
                                <label>ID do Prontuário</label>
                            </div>


                            <div class="row">
                                <div class="input-field col s3    ">
                                    <input placeholder="Espécie" name="pesoAnimal" type="date" class="validate">
                                    <label>Data Procedimento</label>
                                </div>


                            </div>
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

                        </fieldset>

                    </div>
                </div>
                <div class="row">
                    <div>

                        <fieldset class="col offset-s1 s10" style="border: 2px solid black;">
                            <legend style="text-align: center;">
                                Procedimento
                            </legend>


                            aaaaaaaaaa
                            aaaaaaaaaaa
                            aaaaaaaaaaa
                            <br><br><br><br><br>




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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>