<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Expresionismo</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="https://ajax.googlepis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/und/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap"
      rel="stylesheet"
    />

    <link
      rel="icon"
      href="img/ojo logo blanco  (1).png"
    />

    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

  <body>
    <div class="hoja">
      <header class="header1">
        <nav class="navbar navbar-expand-md navbar-dark sticky-top menu1">
          <div class="container-fluid clase-index">
            <a class="navbar-brand" href="index.html"><img src="img/ojo logo blanco1.png" /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarResponsive"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navg navbar-nav w-100 justify-content-center ul">
                <li class="nav-item textomenu">
                  <a class="nav-link  menu" href="index.html">Historia</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link  menu dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ramas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Pintura.php">Pintura</a>
                    <a class="dropdown-item" href="cine.php">Cine</a>
                    <a class="dropdown-item" href="arquitectura.php">Arquitectura</a>
                  </div>
                </li>
                

                <li class="nav-item textomenu">
                  <a class="nav-link menu" href="obras.html">Obras</a>
                </li>
                <li class="nav-item dropdown textomenu">
                  <a class="nav-link menu" href="galeria2.html">Galeria</a>
                </li>
                <li class="nav-item textomenu">
                  <a class="nav-link active menu" href="iniciosesion2.php"
                    >Contacto</a
                  >
                </li>

                
                
              </ul>
            </div>
          </div>
        </nav>


        
      </header>


    <div class="container-fluid padding contacto">
        <div class="row text-center padding">
          <div class="col-12 animate__animated animate__fadeInLeftBig animate__delay-1.5s iniciodesesion">
            <h2 class="unetetitulo">??Unete a nuestra comunidad!</h2>
          </div>
  
          <div class="col-12  parrafocontacto padding">
            <p> Envianos un mensaje de sugerencia acerca de nuestro contenido para ir mejorando.
              </p>
          </div>


         
        </div>
  
    </div>

  
    
    <!-- Formulario -->
    <div class="container23">
        <div class="row">

          <div class="col-md-2 "></div>

            <div class="col-md-8 col-sm-12 ficha">

                <div class=" col-md-12  sesion">
                    <h2>contacto</h2>
                  </div>

                <div class="shadow-lg p-3 mb-5 mt-4  rounded">

                <form method="POST" action="enviar.php">
                 <div class="form-group">
                   <label for="exampleFormControlInput1">Correo</label>
                   <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlInput1">Nombre</label>
                   <input name="nombre" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                   <label for="exampleFormControlInput1">Localidad</label>
                   <input name="localidad" type="text" class="form-control" id="exampleFormControlInput3" placeholder="Localidad">
                 </div>

                 <div class="form-group">
                   <label for="exampleFormControlTextarea1">Comentario</label>
                   <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div>

                 <div class="form-group row">
                 <div class="col-sm-10">
                   <button type="submit" class="btn btn-primary">Enviar</button>
                 </div>
                 </div>

                </form>
                </div>
                <div class="col-md-2 "></div>

            </div>

        
        </div>
    </div>


  
    

    <footer>
      <div class="container_fluid footer padding">
        <div class="row text-center foot">
          
          <div class="col-12 unir">
            <hr class="light" />
            <h2>Unete</h2>
          </div>
  
          <div class="col-12 social padding">
            <a href="https://m.facebook.com/BreakingBad/?locale2=es_LA"
              ><i class="fab fa-facebook"></i
            ></a>
            <a href="https://twitter.com/breakingbad"
              ><i class="fab fa-twitter"></i
            ></a>
            <a href="https://www.youtube.com/channel/UC5ZiUaIJ2b5dYBYGf5iEUrA"
              ><i class="fab fa-youtube"></i
            ></a>
            <a href="https://www.instagram.com/breakingbad/?hl=es-la"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>

          <div class="col-12">
            
            <hr class="light" />
            <h5> Copyright&copy; 2022</h5>
          </div>
        </div>
      </div>
    </footer>





  
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js " integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js " integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm " crossorigin="anonymous "></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js " integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js " integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm " crossorigin="anonymous "></script>



<script>
        
        (function() {
            'use strict'

            
            var forms = document.querySelectorAll('.needs-validation')

            
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

</body>

</html>

