<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/navegacion.css">
  <title>Navegación</title>
</head>

<body>
  <!-- inicio barra de navegación -->
  <div class="site-nav">
    <!-- agregado testa monti -->
    <nav class="navegacion">
        <span id="main1"  onclick="openNav()"> &#9776; 
        </span>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
          &times;
        </a>
        <a href="../session/registrar.php">
          Registar Nuevos Usuarios
        </a>
        <a class="login" href="../session/cierre.php">
          Log Out
        </a>
      </div>

      <ul class="menu">
        <li><a href="#">Institucional</a>
          <ul class="submenu1">
            <!-- <li><a href="#">* El IFTS 4 (historia, presentación)</a> </li>
            <li><a href="../index.php">* Autoridades</a> </li>
            <li><a href="../carreras.php">* Equipo Docente</a> </li>
            <li><a href="../index.php">* Equipo No Docente</a> </li> -->
            <li><a href="#">* Reglamento orgánico de los IFTS</a> </li>
            <li><a href="http://localhost/PAGE_IFTS4/gaceta/views/panel/panel_profesor.php">* GACETA PARA SUBIR NOTICIAS</a> </li>

            <!-- <li><a href="../contacto.php">* Contacto</a> </li> -->
          </ul>
        </li>
        <li><a href="#">Carreras</a>
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
            <li><a target="_blanck" href="https://aulasvirtuales.bue.edu.ar/">* Acceso al aula virtual</a></li>
            <li><a target="_blanck" href="https://guarani-autogestionagencia.bue.edu.ar/">* Acceso al SIU Guaraní</a></li>
            <li><a href="http://localhost/PAGE_IFTS4/gaceta/views/panel/vista_general_noticias.php">GACETA</a></li>
            <!-- <li><a href="#">* Reportar problemas de acceso al aula/siu</a></li> -->
            <!-- <li><a href="#">* Otros Trámites</a></li> -->
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