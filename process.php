<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Santa te visita en esta Navidad</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


    <!-- HEADER -->
    <header class="main-header">
              <!-- NAVIGATION -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container">
                <a class="navbar-brand" href="index.php">
                  <img src="images/logo.png" style="width: 30%;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html#galeria">Galería de fotos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html#contacto">Contacto</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
      <div class="background-overlay text-white py-5">
        <div class="container">
          <div class="row d-flex h-100">
            <div class="col-sm-6 text-center justify-content-center align-self-center">


              <!--PHP PROCESS -->
        
   <?php 

   include("con_db.php");
   
         $name = trim($_POST['name']);
         $email = trim($_POST['email']);
         $mensaje = trim($_POST['mensaje']);
         $consulta = "INSERT INTO correos(nombre, email, comentarios ) VALUES ('$name','$email','$mensaje')";
         $resultado = mysqli_query($conex,$consulta);

         echo "<h1>Mensaje Enviado exitosamente <br><br></h1>";

   ?>

   <a href="index.php" class = "btn btn-success btn-lg btn-block">Volver a la página</a>
                
           
            </div>
            <div class="col-sm-6">
              <img src="images/img-002.jpg" class="img-fluid d-none d-sm-block">
            </div>
          </div>
        </div>
      </div>
    </header>

    
  
      
 
    <footer>
      <div class="container p-3">
        <div class="row text-center text-white">
          <div class="col ml-auto">
            <p>Copyright Santatevisita.com &copy; 2021</p>
          </div>
        </div>
      </div>       
    </footer>


    <script src="./js/codigo.js"></script>
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>  
  </body>
  </html>