<!DOCTYPE html>
<html lang="pt-BR">
<!-- Servidor apache, bd mysql, PHP. -->

  <head>
    <title>Teste Gigapixel</title>
  </head>

  <body>
    <!-- Criando o menu de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Teste Gigapixel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novo">Novo cadastro</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?page=listar" > Listar Usuários </a>
            </a>
          </li>
        </ul>
      </div>
    </nav>

  <script src ="js/bootstrap.bundle.min.js"></script>
</body>

</body>
  <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php 
          //inclui o arquivo de conexão
          include ("config.php");

          //switch que pega a ação lançada pelo arquivo e o exibe
            switch(@$_REQUEST["page"]){
              case "novo":
                include("cadastro.php");
                break;
              case "listar":
                include("listar_usuario.php");
                break;
              case "salvar":
                include("salvar_usuario.php");
                break;
              case "editar":
                include("editar_usuario.php");
                break;
              case "debitar":
                include("debitar.php");
                break;
              case "depositar":
                include("depositar.php");
                break;
              default:
                print "<h1>Selecione a opção no menu</h1>";
            }

