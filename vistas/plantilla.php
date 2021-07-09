<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS - start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap CSS - end -->

    <title>PHP CRUD MVC</title>
  </head>

  <body>
    <!--***************************************
    LOGOTIPO
    ****************************************-->
    <div class="container-fluid">
      <h3 class="text-center py-3">LOGO</h3>
    </div>

    <!--***************************************
    BOTONERA
    ****************************************-->
    <div class="container-fluid bg-light">
      <div class="container">
        <div class="nav nav-justified py-2 nav-pills">

        <?php if(isset($_GET["pagina"])): ?>
          
          <?php if($_GET["pagina"] == "registro"): ?>
            <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
          </li>
          <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=registro">Registro</a>
          </li>
          <?php endif ?>

          <?php if($_GET["pagina"] == "ingreso"): ?>
            <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
          </li>
          <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
          </li>
          <?php endif ?>

          <?php if($_GET["pagina"] == "inicio"): ?>
            <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
          </li>
          <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
          </li>
          <?php endif ?>

          <?php if($_GET["pagina"] == "salir"): ?>
            <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
          </li>
          <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
          </li>
          <?php endif ?>

          <?php else: ?>

            <!--GET: $_GET["variable"] Variables que se pasan como parametros Via URL ( Tambien conocido como cadena de consulta a traves de la URL). 
        Cuando es la primera variable, se separa con ? 
        las que siguen a continuacion , se separan con &
        -->

          <li class="nav-item">
            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
          </li>

        <?php endif ?>

        
        </div>
      </div>
    </div>


    <!--***************************************
    CONTENIDO
    ****************************************-->
    <div class="contanier-fluid mt-3">
      <div class="container">
        <?php 
        # ISSET: isset() Determina si una variable esta definida y no es NULL

        if (isset($_GET["pagina"])) {
          # code...
          if ($_GET["pagina"] === "registro" || $_GET["pagina"] === "ingreso" || $_GET["pagina"] === "inicio" || $_GET["pagina"] === "salir") {
            # code...
            include "paginas/".$_GET["pagina"].".php";
          }

        }else {
          # code...
          include "paginas/registro.php"; 
        }
        
        
        ?>
      </div>
    </div>

    

    <!-- Jquery - start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Jquery - end -->

    <!-- Bootstrap Bundle with Popper - start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle with Popper - end -->

    <!-- Font Awesome - start -->
    <script src="https://kit.fontawesome.com/9ad9774a64.js" crossorigin="anonymous"></script>
    <!-- Font Awesome - end -->
    
  </body>
</html>