<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Queremos ayudarte para que tu PYME o emprendimiento empiece a aumentar sus ventas. Comunícate con nosotros para trabajar estrategias de marketing digital que beneficiarán al crecimiento de tu negocio.">

  <link rel="stylesheet" href="../src/style/contacto.css" type="text/css" />
  <link rel="stylesheet" href="../src/style/partials/footer.css">
  <link rel="stylesheet" href="../src/style/partials/navbar.css">

  <title>Contáctanos | Agencia de Marketing Digital para PYMES | DigiMedia – Laboratorio Emprendedor</title>
  <link href="https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <script src="../js/index.js" text="text/javascript"></script>
</head>

<body>
  <div class="contenedor">

    <nav>
      <a href="../index.html" class="logo">
        <img src="../src/images/logo.webp" alt="Digital Media" />
      </a>
      <input type="checkbox" id="click" />
      <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
      <ul>
        <li><a href="../index.html">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="blog/blog1.php">Blogs</a></li>
        <li><a href="contacto.php">Contáctanos</a></li>
      </ul>
    </nav>

    <div class="espacio" style="height: 80px;"></div>

    <main class="main">
      <div class="presentacion">
        <div class="texto">
          <span>
            <b>CONTÁ</b>
          </span>
        </div>
        <div class="imagen">
          <img src="../src/images/Mark2.webp" alt="" />
        </div>
        <div class="rectangulo">
          <span>
            En DIGIMEDIA estamos enfocados en generar valor para tu negocio
            con el fin de incrementar las ventas de tus productos y servicios.
            Por tal motivo, te invitamos a dejar tus datos de contacto con el
            fin de conocernos mejor y plantear estrategias de marketing
            digital que brinden soluciones a la medida de tu emprendimiento.
            Soy Mark&nbsp;y espero poder estar en contacto contigo para pactar
            una reunión, resolver tus inquietudes y sacar adelante tu proyecto
          </span>
        </div>
      </div>

      <div class="formulario">
        <div class="texto_form">
          <span>
            CTANOS
          </span>
          <span class="oculto">CONTACTANOS</span>
        </div>
        <form action="consultar.php" method="post">
          <input type="text" placeholder="Nombre" name="nombre" />
          <input type="text" placeholder="Email" name="email" class="form" />
          <input type="text" placeholder="Teléfono" name="telefono" />
          <input type="text" placeholder="Empresa" name="empresa" />
          <input type="text" placeholder="Ubicación" name="ubicacion" />
          <textarea placeholder="Detalle" name="detalle" rows="5"></textarea>
          <input type="submit" name="enviar" value="Enviar" />
        </form>
      </div>
    </main>

    <!--FOOTER-->
    <footer>
      <div class="footer">
        <div class="footer__descripcion">
          <h4>DigiMedia – Laboratorio Emprendedor</h4>
          <p>
            Somos una agencia de marketing digital especialista en el crecimiento comercial de las PYMES y emprendimientos
          </p>
        </div>
        <div class="footer__contacto">
          <h4>Digimediamarketing SAC</h4>
          <p>
            <i class="fas fa-map-marker-alt"></i> Calle Las Fresias Mz E Lote 26 - Ate Vitarte
          </p>
          <p><i class="fas fa-phone-alt"></i> 936910425</p>
          <p><i class="far fa-envelope"></i> ventas@digimediamkt.com</p>
        </div>
        <div class="footer__sociales">
          <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </footer>

    <!--BOTON FLOTANTE-->
    <a href="#" target="_blank" class="btn-whatsapp">
      <i class="fab fa-whatsapp"></i>
    </a>

  </div>
  <script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>
</body>

</html>