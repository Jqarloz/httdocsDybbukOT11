<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ERP 8° "C"</title>
</head>
<body>

<!-- Que nunca Falte!!! -->
<?php include("components.html"); ?>
<!-- ok -->
<!-- PARALLAX -->
<main>
<div class="parallax-container">
  <div class="parallax"><img src="img/slider2.jpg"></div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="img/slider3.jpg"></div>
</div>
<div class="section green lighten-4">
  <div class="row container">
    <div class="row">
      <!-- Card Caja -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/fondocard.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><br>Caja<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Caja<i class="material-icons right">close</i></span>
              <p>En este proceso.....</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/Caja.html">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Caja -->
      <!-- Card Pago a Servicios -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/fondocard.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pago a <br>Servicios<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pago a Servicios<i class="material-icons right">close</i></span>
              <p>En este proceso.....</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/Pago.html">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago a Servicios -->
      <!-- Card Pago A Empleados -->
      <div class="col s4">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/fondocard.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Pago a <br>Empleados <i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Pago a Empleados<i class="material-icons right">close</i></span>
              <p>En este proceso.....</p>
            </div>
            <div class="card-action">
              <center><p><a href="pages/PagoEmpleado.html">Mostrar</a></p></center>
            </div>
          </div>
      </div>
      <!-- END Pago A Empleados -->
    </div>
  </div>
</div>
<div class="parallax-container">
  <div class="parallax"><img src="img/slider2.jpg"></div>
</div>
</main>
<!-- end PARALLAX -->


<script>
$(document).ready(function(){
      $('.parallax').parallax();
    });
</script>

</body>
</html>