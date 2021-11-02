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
    <link rel="stylesheet" href="./css-native/style.css">
    <!-- scroll -->
    <script src = "js/smooth-scroll.min.js"></script>
    <script>

			// Instantiate Scrolls
			var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');

			if (document.querySelector('[data-easing]')) {
				var linear = new SmoothScroll('[data-easing="linear"]', {easing: 'linear'});

				var easeInQuad = new SmoothScroll('[data-easing="easeInQuad"]', {easing: 'easeInQuad'});
				var easeInCubic = new SmoothScroll('[data-easing="easeInCubic"]', {easing: 'easeInCubic'});
				var easeInQuart = new SmoothScroll('[data-easing="easeInQuart"]', {easing: 'easeInQuart'});
				var easeInQuint = new SmoothScroll('[data-easing="easeInQuint"]', {easing: 'easeInQuint'});

				var easeInOutQuad = new SmoothScroll('[data-easing="easeInOutQuad"]', {easing: 'easeInOutQuad'});
				var easeInOutCubic = new SmoothScroll('[data-easing="easeInOutCubic"]', {easing: 'easeInOutCubic'});
				var easeInOutQuart = new SmoothScroll('[data-easing="easeInOutQuart"]', {easing: 'easeInOutQuart'});
				var easeInOutQuint = new SmoothScroll('[data-easing="easeInOutQuint"]', {easing: 'easeInOutQuint'});

				var easeOutQuad = new SmoothScroll('[data-easing="easeOutQuad"]', {easing: 'easeOutQuad'});
				var easeOutCubic = new SmoothScroll('[data-easing="easeOutCubic"]', {easing: 'easeOutCubic'});
				var easeOutQuart = new SmoothScroll('[data-easing="easeOutQuart"]', {easing: 'easeOutQuart'});
				var easeOutQuint = new SmoothScroll('[data-easing="easeOutQuint"]', {easing: 'easeOutQuint'});
			}

			// // Log scroll events
			// var logScrollEvent = function (event) {
			// 	console.log('type:', event.type);
			// 	console.log('anchor:', event.detail.anchor);
			// 	console.log('toggle:', event.detail.toggle);
			// };
			// document.addEventListener('scrollStart', logScrollEvent, false);
			// document.addEventListener('scrollStop', logScrollEvent, false);
			// document.addEventListener('scrollCancel', logScrollEvent, false);
		</script>
  </head>
  <body>


    <!-- HEADER -->
    <header class="main-header">
              <!-- NAVIGATION -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id = "home">
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
                      <a data-scroll class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a data-scroll class="nav-link" href="#galeria">Galería de fotos</a>
                    </li>
                    <li class="nav-item">
                      <a data-scroll class="nav-link" href="#contacto">Contacto</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
      <div class="background-overlay text-white py-5">
        <div class="container">
          <div class="row d-flex h-100">
            <div class="col-sm-6 text-center justify-content-center align-self-center">
              <h1>
                Santa de visita a tu casa.
              </h1>
              <p>La llegada de la Navidad es una fecha de Union y Esperanzas, donde compartimos momentos inolvidables con todas aquellas personas que han marcado nuestra vida. Familiares y amigos rodean nuestra mesa en la cena de Navidad.</p>
                <p> Dales la sorpresa mas inigualable y soñada por todos en Noche Buena. Santa llegara a tu casa a repartir tus regalos y podras tomarte fotos con este hermoso personaje.</p>
               <p> Este momento quedara grabado en tu mente y tus fotografias.</p>
              <a data-scroll href="https://wa.me/584245151109" class="btn btn-success btn-lg btn-block">
                Agendar por WhatsApp YA
              </a>
            </div>
            <div class="col-sm-6">
              <img src="images/img-002.jpg" class="img-fluid d-none d-sm-block">
            </div>
          </div>
        </div>
      </div>
    </header>

    
    <!-- ABOUT -->
    <section class="m5 text-center bg-light">
      <div class="container">
        <div class="row">
          <div class="m-5">
            <h3>Mi trayectoria.</h3>
            <p>
              A lo largo de estos 18 años he tenido la dicha  de ser la figura del Sambil en un gran show para darle la bienvenida a la Navidad, tambien participe en el encendido de la navidad en el Centro Comercial Las Trinitarias. He acompañado a muchas familias en la entrega de regalos a los pequeños y grandes de la casa, llevando alegria a cada rincon. He sido figura de las navidades del Sistema de Coros del Estado Lara entregando los regalos a todos los niños del coro, colegios y empresas han confiado en mi servicio amenizando sus fiestas de Navidad con mi presencia. Acá te dejo una muestra de mi trayectoria.
            </p>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Mb0WJYDsFyg?controls=0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

       <!-- BOXES -->

       <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="card text-white bg-danger">
              <div class="card-body">
                <h3>Santa en casa.</h3>
                <p>
                    Entrega de regalos, mensajes a los niños y niñas, sesión de fotos.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-success">
              <div class="card-body">
                <h3>Saludo personalizado.</h3>
                <p>
                  Vive una experiencia única, Santa te hará un mensaje totalmente personalizado y dedicado.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-danger">
              <div class="card-body">
                <h3>Labor social.</h3>
                <p>
                  Si representas a un hospital o a una ONG, comunícate con Santa.
                </p>
         
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-success">
              <div class="card-body">
                <h3>Promoción Especial 2x1.</h3>
                <p>
                  Si vienes de parte de la página web, estarás ganando 2x1 en saludos personalizados.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    <!--GALLERY-->
    <section id= "galeria" class="text-center team">
      <div class="container p-5">
        <h1 class="text-center text-white">Galería de Fotos</h1>
        <p></p>
        
        <div class="row">
         
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="images/img-01.jpg" alt="Galería de fotos">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="images/img-02.jpg" alt="Galería de fotos">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="images/img-03.jpg" alt="Galería de fotos">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="images/img-04.jpg" alt="Galería de fotos">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="images/img-05.jpg" alt="Galería de fotos">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <img src="images/img-06.jpg" alt="Galería de fotos">
            </div>

        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section id= "contacto" class="bg-light py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <h3>Contacto directo.</h3>
            <p>
              Contacta directamente con nosotros a través del siguiente canal.
            </p>
            <form id="form1" action="process.php" method="post" class="needs-validation" novalidate>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <i class="fas fa-user input-group-text"></i>
                </div>
                <input name="name" type="text" class="form-control" id="name" placeholder="nombre" aria-describedby="inputGroupPrepend" required>
                      <div class="valid-feedback">Perfecto</div>
                      <div class="invalid-feedback">Favor ingresar un dato correcto.</div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <i class="fas fa-envelope input-group-text"></i>
                </div>
                <input name="email" type="text" class="form-control" id="email" placeholder="email" aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">Perfecto</div>
                    <div class="invalid-feedback">Favor ingresar un dato correcto.</div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <i class="fas fa-pencil-alt input-group-text"></i>
                </div>
                <textarea name = "mensaje" type = "text" id ="message" input = "message" cols="30" rows="10" placeholder="Mensaje" class="form-control" required></textarea>
                    <div class="valid-feedback">Perfecto</div>
                    <div class="invalid-feedback">Favor ingresar un dato correcto.</div>
              </div>
              <button type="submit" class="btn btn-success btn-block">Enviar</button>
            </form>

          </div>
          <div class="col-lg-3 align-self-center">
            <img src="img/logo.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container p-3">
        <div class="row text-center text-white">
          <div class="col ml-auto">
            <p>Copyright Santatevisita.com &copy; 2021</p>
          </div>
        </div>
      </div>       
    </footer>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="./js/codigo.js"></script>
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>  
  </body>
</html>