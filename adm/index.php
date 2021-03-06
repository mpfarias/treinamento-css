
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marcelo Faruas">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login - Administrador Tosi Dioramas</title>    

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="style/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="">
    <img class="mb-4" src="../img/TosiDioramasbgd.png" alt="" width="172" height="157">
    <h1 class="h3 mb-3 fw-normal">Login - Adm</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Usuário" name="user" id="user">
      <label for="floatingInput">Usuário</label>
    </div>
 
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="password" id="password">
      <label for="floatingPassword">Senha</label>
    </div>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
</main>
  </body>
</html>
