<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="navegacion.css">
  <title>Navegación</title>
</head>

<body>
  <!-- inicio barra de navegación -->
  <div class="site-nav">
    <!-- agregado testa monti -->
    <nav class="navegacion">
      <a class="login" >
        <span id="main1"  onclick="openNav()"> &#9776; Login
        </span>
      </a>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
          &times;
        </a>
        <a href="login.php">
          Login
        </a>
      </div>

      <ul class="menu">
        <li><a href="#">Institucional</a>
          <ul class="submenu1">
            <li><a href="#">* El IFTS 4 (historia, presentación)</a> </li>
            <li><a href="index.php">* Autoridades</a> </li>
            <li><a href="carreras.php">* Equipo Docente</a> </li>
            <li><a href="index.php">* Equipo No Docente</a> </li>
            <li><a href="#">* Reglamento orgánico de los IFTS</a> </li>
            <li><a href="contacto.php">* Contacto</a> </li>
          </ul>
        </li>
        <li><a href="carreras.php">Carreras</a>
          <ul class="submenu2">
            <li><a href="#">* Técnico Superior en Desarrollo de Software</a> 
            <ul class="submenuA">
              <li><a href="#">-Plan de estudios</a></li>
              <li><a href="#">-Régimen de correlativas</a></li>
              <li><a href="#">-Información sobre equivalencias</a></li>
            </ul>
            </li>
            <li><a href="#">* Técnico Superior en Análisis de Sistemas</a> 
            <ul class="submenuB">
              <li><a href="#">-Plan de estudios</a></li>
              <li><a href="#">-Régimen de correlativas</a></li>
              <li><a href="#">-Información sobre equivalencias</a></li>
            </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Estudiantes</a>
          <ul class="submenu3">
            <li><a href="#">* Horarios de cursada</a></li>
            <li><a href="index.php">* Acceso al aula virtual</a></li>
            <li><a href="index.php">* Acceso al SIU Guaraní</a></li>
            <li><a href="#">* Reportar problemas de acceso al aula/siu</a></li>
            <li><a href="#">* Otros Trámites</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main1").style.marginLeft = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main1").style.marginLeft = "0";
      document.body.style.backgroundColor = "white";
    }
    // agregado testa monti
    document.addEventListener("click", (event) => {
      const menuBtn = document.getElementById("main1");
      let target = event.target;
      do {
        if (target == menuBtn) {
          openNav();
          return;
        }
        target = target.parentNode;
      } while (target);
      closeNav();
    });
    // fin agregado testa monti
  </script>
</body>

</html>