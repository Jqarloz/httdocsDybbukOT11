<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
    <section>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper blue darken-3">
            <img src="img/logo.png" class="brand-logo right responsive-image" width="14%">
            <ul class="left hide-on-med-and-down">
              <li><a href="" data-activates="slide-out" class="button-collapse"><i class="material-icons left">view_module</i></a></li>
              <li>Menu</li>
            </ul>
          </div>
        </nav>
      </div>
      <ul id="slide-out" class="side-nav fixed blue lighten-5">
        <li><div class="user-view">
          <div class="background">
            <img src="img/background.jpg">
          </div>
          <a href="#!user"><img class="circle" src="img/logo2.png"></a>
          <span class="orange-text name">Realizador:</span>
          <span class="white-text name">John Doe</span>
          <span class="white-text email">jdandturk@gmail.com</span>
        </div></li>
        <li><a href="#!"><i class="material-icons">cloud</i>Área de trabajo</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Cuenta</a></li>
        <li><a href="#!Perfil"><i class="material-icons">face</i>Perfil</a></li>
        <li><a href="#!Editar"><i class="material-icons">contacts</i>Editar Perfil</a></li>
      </ul>
    </section>
    <section>
      <br><br>
      <div class="row">

        <div class="col s6 offset-s4">
          <div class="row orange lighten-4">
            
            <div class="col s6">
              <div class="card">
                <div class="card-image">
                  <img src="img/ej1.jpg">
                  <span class="card-title name">Nuevo Disco</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>Agregar un nuevo disco con información de programas a la base de datos.</p>
                </div>
              </div>
            </div>

            <div class="col s6">
              <div class="card">
                <div class="card-image">
                  <img src="img/ej2.jpg">
                  <span class="card-title name">Buscar Disco</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>Buscar dentro de la base de datos la ubicación exacta de un CD en existencia.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
          $(".button-collapse").sideNav();
            })
      </script>
    </body>
  </html>