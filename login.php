<!DOCTYPE html>

<html lang="pt-br">

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="./css/login.css">

</head>
<title>
  Login

</title>

<body style="background-image:linear-gradient(to right, #BED2EB, #3EA2B9)">
  <div class="section"></div>

  <main class="">
    <center>
      <img class="responsive-img" style="width: 250px;" />
      <div class="section"></div>

      <h5 style="font-family:'Times New Roman', Times, serif;color: white;font-size:50px">Faça o Login</h5>
      <div class="section"></div>

      <div class="container ">
        <div class="z-depth-1 grey lighten-4 row " style="display: inline-block;width: 30vw;height: 380px; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form action="conexaoLogin.php" class="col s12" method="post">
            <div class='row col'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id="username" required />
                <label for='username'>Usuário</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' required />
                <label for='password'>Senha</label>
              </div>
              
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect #80cbc4 teal lighten-3'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>

    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>